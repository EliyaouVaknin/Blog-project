<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//show all posts
Route::get('/blog', [\App\Http\Controllers\BlogPostController::class, 'index']);

//show one post by posts number
Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);
