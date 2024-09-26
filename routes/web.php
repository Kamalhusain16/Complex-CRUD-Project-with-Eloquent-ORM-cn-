<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/posts',[PostController::class,'index'])->name('Posts.index');

Route::get('/posts/create',[PostController::class,'create'])->name('Posts.create');

Route::post('/posts',[PostController::class,'store'])->name('Posts.store');

Route::get('/show/{id}',[PostController::class,'show'])->name('Posts.show');

Route::post('/posts/{id}/update', [PostController::class, 'update'])->name('Posts.update');

Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('Posts.edit');

Route::delete('/posts/{id}',[PostController::class,'destroy'])->name('Posts.destroy');




