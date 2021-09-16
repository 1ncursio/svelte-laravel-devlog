<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('index');
})->name('index');

Route::get('posts')->name('posts.index')->uses('PostController@index');
Route::get('posts/@{slug}')->name('posts.show')->uses('PostController@show');
