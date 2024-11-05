<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        
        $author = new Author();
        // dd($author);
        return view('authors/create', compact('author'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
        ]);

        Author::create($request->only('name', 'bio'));

        return redirect()->route('authors.index')->with('success', 'Author created successfully.');
    }

    public function show($id) {
    $author = Author::findOrFail($id);
    return view('authors.show', compact('author'));
}
}