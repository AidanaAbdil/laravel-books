<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index(){
    $books = Book::with('authors')
    ->latest()
    ->limit(10)
    ->get();

    return view('index.index', compact('books'));
}

public function show($id){

    $book = Book::with('reviews')->findOrFail($id);

    return view('book.show', compact('book'));
}


public function store(Request $request)
    {
        if(!Auth::check()) return redirect()->route('book.show',['book_id' => $request->book_id])->with('errors', 'You must be logged in.');

        $request->validate([
            'text' => 'required|string|max:255',
        ]);

        $review = new Review();
        $review->text =  $request->text;
        $review->book_id = $request->book_id;
        $review->user_id = Auth::id();
        $review->save();

        return redirect()->route('book.show', ['book_id' => $request->book_id])->with('success', 'Review submitted successfully.');
    }

    public function delete($id, $review_id){
        Review::findOrFail($review_id)->delete();
        return redirect()->back();
    }
}
