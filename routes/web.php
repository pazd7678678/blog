<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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


Route::get('/', [PostController::class, 'index'])->name('home');
Route::get("posts/{post:slug}",[PostController::class,'show']);

Route::get("/categories/{category:slug}", function (\App\Models\category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => \App\Models\category::all()
    ]);

});


Route::get("/authors/{author:username}", function (\App\Models\User $author) {
//    dd($author);
    return view('posts', [
        'posts' => $author->posts,
        'categories' => \App\Models\category::all()
    ]);

});




