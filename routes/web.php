<?php

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


Route::get('/about', 'PagesController@getAbout' );
Route::get('/contact', 'PagesController@getContact' );
Route::get('/', 'PagesController@getIndex' );

// this is the laravel way to connect all the routes for a controller
Route::resource('posts', 'PostController');


/* to set the full list of application routes
 * php artisan route:list
 */