<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/blog', function () {
    return view('blog-posts', [
        'posts' => Post::all()
    ]);
});

Route::get('/blog/{post}', function ($slug) {
    return view('blog-post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[A-z_\-]+');
