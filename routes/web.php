<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GuestController@home') -> name('home');

Route::get('/postcard/create', 'GuestController@createPostcard') -> name('postcard.create');
Route::post('/postcard/store', 'GuestController@storePostcard') -> name('postcard.store');

Route::get('/api/postcards/index', 'ApiController@getPostcards') -> name('api.postcards.index');