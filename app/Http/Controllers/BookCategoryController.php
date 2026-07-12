<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $categories = BookCategory::paginate(10);
    return view('library.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('library.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:book_categories,name',
            'description' => 'nullable',
        ]);

        BookCategory::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('book-categories.index')->with('success', 'Category created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BookCategory $bookCategory)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookCategory $bookCategory)
    {
        return view('library.categories.edit', compact('bookCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookCategory $bookCategory)
    {
        $request->validate([
            'name' => ['required', 'max:255', Rule::unique('book_categories', 'name')->ignore($bookCategory->id)],
            'description' => 'nullable',
            'is_active' => 'nullable|boolean',
        ]);

        $bookCategory->update([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('book-categories.index')->with('success', 'Category updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookCategory $bookCategory)
    {
        if ($bookCategory->books()->exists()) {
            return back()->withErrors(['category' => 'This category has books linked to it and cannot be deleted.']);
        }

        $bookCategory->delete();

        return redirect()->route('book-categories.index')->with('success', 'Category deleted.');
    }
}
