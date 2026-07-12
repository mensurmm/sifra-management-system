<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishers = Publisher::latest()->paginate(10);
        return view('library.publishers.index', compact('publishers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('library.publishers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'name' => 'required|max:255|unique:publishers,name',
            'phone' => 'nullable|max:255',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable',
            'is_active' => 'nullable|boolean',
        ]);

        Publisher::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('publishers.index')->with('success', 'Publisher created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        return view('library.publishers.edit', compact('publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publisher $publisher)
    {
        $request->validate([
            'name' => ['required', 'max:255', Rule::unique('publishers', 'name')->ignore($publisher->id)],
            'phone' => 'nullable|max:255',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable',
            'is_active' => 'nullable|boolean',
        ]);

        $publisher->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('publishers.index')->with('success', 'Publisher updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        if ($publisher->books()->exists()) {
            return back()->withErrors(['publisher' => 'This publisher has books linked to it and cannot be deleted.']);
        }

        $publisher->delete();

        return redirect()->route('publishers.index')->with('success', 'Publisher deleted.');
    }
}
