<?php

use Illuminate\Support\Facades\Route;


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
Route::get('/', 'App\Http\Controllers\PageController@Redirect');
Route::get('/home', 'App\Http\Controllers\PageController@LoadMain');

Route::get('/404', 'App\Http\Controllers\PageController@NotFound');

Route::get('/post/{id}', 'App\Http\Controllers\PageController@Post');

Route::get('/contact', 'App\Http\Controllers\PageController@ContactUs');

Route::get('/contact/send', 'App\Http\Controllers\RequestController@Contact');

Route::get('/parse', 'App\Http\Controllers\ParserController@parse');
