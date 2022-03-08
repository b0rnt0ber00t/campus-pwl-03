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

Route::view('/', 'page.index');
Route::view('/about', 'page.about');
Route::view('/rooms', 'page.rooms');
Route::view('/gallery', 'page.gallery');
Route::view('/dinning', 'page.dinning');
Route::view('/news', 'page.news');
Route::view('/contact-us', 'page.contact-us');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
