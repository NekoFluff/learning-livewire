<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\Posts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/counter', Counter::class);

Route::get('/posts', Posts::class);
// Route::get('/posts', fn () => view('livewire.posts', [
//     'posts' => \App\Models\Post::all(),
// ]));
Route::get('/create-post', CreatePost::class);
