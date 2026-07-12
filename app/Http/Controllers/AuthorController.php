<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::latest()->paginate(10);
      //  dd('Author module works');
        return view('library.authors.index', compact('authors'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('library.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'biography' => 'nullable',
            'is_active' => 'nullable|boolean',
        ]);

        Author::create([
            'name' => $request->name,
            'biography' => $request->biography,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('authors.index')->with('success', 'Author created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('library.authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required|max:255',
            'biography' => 'nullable',
            'is_active' => 'nullable|boolean',
        ]);

        $author->update([
            'name' => $request->name,
            'biography' => $request->biography,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('authors.index')->with('success', 'Author updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')->with('success', 'Author deleted successfully');
    }
}
