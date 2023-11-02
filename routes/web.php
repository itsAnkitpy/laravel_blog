<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    $posts = Post::latest()->get();
    
    // $posts = Post::all();
    return view('posts', [
        'posts' => $posts,
        'categories' => Category::all(),
    ]);
})->name('home');

Route::get('/posts/{post:slug}', function (Post $post){

    return view('single_post', [
        'post' => $post,
    ]);
});

Route::get('categories/{category:slug}', function (Category $category){
    return view('posts', [
        'posts' => $category->posts,
        'categories' => Category::all(),
        'currentCategory' => $category, 
    ]);
})->name('category');

Route::get('authors/{author:username}', function (User $author){
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all(),
    ]);
});
