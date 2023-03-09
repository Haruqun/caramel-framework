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
    
    return view('welcome', [
        'blog' => [
            'title' => 'First Blog Post',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'author' => 'John Doe',
            'date' => '2023-03-10',
        ],
    ]);
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/posts', function () {
    return view('posts.index');
});

// contact
Route::get('/contact', function () {
    return view('contact');
});