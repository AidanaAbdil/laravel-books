<?php

use Illuminate\Support\Facades\Route;



Route::get('/about-us', function () {
    return view('about.about-us');
});

Route::get('/', [App\Http\Controllers\BookController::class, 'index']);
Route::get('/book/{book_id}', [App\Http\Controllers\BookController::class,'show'])->name('book.show');
Route::post('/book/{book_id}/review',[App\Http\Controllers\BookController::class,'store'])->name('review.store')->middleware('auth');
Route::view('/users','api.users');
Route::delete('/book/{book_id}/reviews/{review_id}', [App\Http\Controllers\BookController::class,'delete'])->name('review.delete');