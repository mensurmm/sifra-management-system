<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\BookCategory;
use App\Models\BookCopy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    /**
     * Display a listing of the resource with live filters.
     */
    public function index(Request $request)
    {
        // 1. Build an expandable query wrapper
        $query = Book::with([
            'category',
            'publisher',
            'authors'
        ]);

        // 2. Live Keyword Search (Title, ISBN, or Author Name)
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('isbn', 'like', '%' . $search . '%')
                  ->orWhereHas('authors', function ($authorQuery) use ($search) {
                      $authorQuery->where('name', 'like', '%' . $search . '%');
                  });
            });
        }

        // 3. Category Filter
        if ($request->filled('category')) {
            $categoryName = $request->input('category');
            $query->whereHas('category', function ($q) use ($categoryName) {
                $q->where('name', $categoryName);
            });
        }

        // 4. Status Filter (Checks individual copies for real-time status counts)
        if ($request->filled('status')) {
            $status = strtolower($request->input('status')); // available, borrowed, overdue
            
            if ($status === 'overdue') {
                // Adjust this condition if you track overdue explicitly via an 'overdue' string value or borrow deadlines
                $query->whereHas('copies', function ($q) {
                    $q->where('status', 'overdue');
                });
            } else {
                $query->whereHas('copies', function ($q) use ($status) {
                    $q->where('status', $status);
                });
            }
        }

        // 5. Execute compilation with continuous pagination parameters appending URLs
        $books = $query->latest()->paginate(5)->withQueryString();

        return view('library.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('library.books.create', [
            'categories' => BookCategory::where('is_active', true)->get(),
            'publishers' => Publisher::where('is_active', true)->get(),
            'authors' => Author::where('is_active', true)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'isbn' => 'required|unique:books,isbn',
            'category_id' => 'required|exists:book_categories,id',
            'publisher_id' => 'required|exists:publishers,id',
            'authors' => 'required|array|min:1',
            'authors.*' => 'exists:authors,id',
            'copies' => 'required|integer|min:1',
            'edition' => 'nullable|max:255',
            'publication_year' => 'nullable|integer|min:1000|max:'.date('Y'),
            'language' => 'nullable|max:255',
            'description' => 'nullable',
        ]);

        DB::beginTransaction();

        try {
            $book = Book::create([
                'category_id'      => $request->category_id,
                'publisher_id'     => $request->publisher_id,
                'isbn'             => $request->isbn,
                'title'            => $request->title,
                'edition'          => $request->edition,
                'publication_year' => $request->publication_year,
                'language'         => $request->language,
                'description'      => $request->description,
                'is_active'        => true,
            ]);

            $book->authors()->attach($request->authors);

            for ($i = 1; $i <= $request->copies; $i++) {
                BookCopy::create([
                    'book_id'        => $book->id,
                    'barcode'        => 'SIFRA-' . strtoupper(uniqid()),
                    'shelf_location' => 'Not Assigned',
                    'status'         => 'available',
                ]);
            }

            DB::commit();

            // Modified to reference your correct 'library.' routing prefix group
            return redirect()
                ->route('library.books.index')
                ->with('success', 'Book registered successfully.');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $book->load(['copies', 'category', 'publisher', 'authors']);
        return view('library.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $book->load('authors');

        return view('library.books.edit', [
            'book' => $book,
            'categories' => BookCategory::where('is_active', true)->get(),
            'publishers' => Publisher::where('is_active', true)->get(),
            'authors' => Author::where('is_active', true)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|max:255',
            'isbn' => ['required', Rule::unique('books', 'isbn')->ignore($book->id)],
            'category_id' => 'required|exists:book_categories,id',
            'publisher_id' => 'required|exists:publishers,id',
            'authors' => 'required|array|min:1',
            'authors.*' => 'exists:authors,id',
            'edition' => 'nullable|max:255',
            'publication_year' => 'nullable|integer|min:1000|max:'.date('Y'),
            'language' => 'nullable|max:255',
            'description' => 'nullable',
            'is_active' => 'nullable|boolean',
        ]);

        DB::transaction(function () use ($request, $book) {
            $book->update([
                'category_id' => $request->category_id,
                'publisher_id' => $request->publisher_id,
                'isbn' => $request->isbn,
                'title' => $request->title,
                'edition' => $request->edition,
                'publication_year' => $request->publication_year,
                'language' => $request->language ?: 'English',
                'description' => $request->description,
                'is_active' => $request->has('is_active') ? $request->boolean('is_active') : $book->is_active,
            ]);

            $book->authors()->sync($request->authors);
        });

        return redirect()->route('library.books.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('library.books.index')->with('success', 'Book deleted successfully.');
    }
}