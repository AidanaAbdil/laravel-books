<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;

Route::get('/books/latest', [App\Http\Controllers\Api\BookController::class, 'latest']);
Route::get('/users', [App\Http\Controllers\Api\UserController::class,'index']);
