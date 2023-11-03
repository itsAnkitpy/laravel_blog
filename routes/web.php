<?php

use Illuminate\Support\Facades\Route;

use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// Route::get('categories/{category:slug}', function (Category $category){
//     return view('posts', [
//         'posts' => $category->posts,
//         'categories' => Category::all(),
//         'currentCategory' => $category, 
//     ]);
// })->name('category');

Route::get('authors/{author:username}', function (User $author){
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all(),
    ]);
});
