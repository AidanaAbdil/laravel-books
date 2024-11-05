<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;


Route::get('/authors', [App\Http\Controllers\Admin\AuthorController::class,'index']);
Route::get('/authors/create', [App\Http\Controllers\Admin\AuthorController::class, 'create'])->name('authors.create');
Route::post('/authors/store', [App\Http\Controllers\Admin\AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{id}', [App\Http\Controllers\Admin\AuthorController::class, 'show'])->name('authors.show');
Route::get('/api/test/array', [App\Http\Controllers\Api\TestController::class, 'arrayResponse']);
Route::get('/api/test/model', [App\Http\Controllers\Api\TestController::class, 'modelResponse']);
Route::get('/api/test/collection', [App\Http\Controllers\Api\TestController::class, 'collectionResponse']);
Route::get('/users', [App\Http\Controllers\Admin\UserController::class,'index']);