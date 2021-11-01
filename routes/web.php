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
Route::get('posts', [\App\Http\Controllers\PostsController::class, 'index'])->name('posts.index');
Route::get('post', [\App\Http\Controllers\PostsController::class, 'show'])->name('posts.show');
Route::get('contact', [\App\Http\Controllers\PostsController::class, 'contact'])->name('posts.contact');
Route::get('about', [\App\Http\Controllers\PostsController::class, 'about'])->name('posts.about');
