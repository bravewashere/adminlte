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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', 'HomeController@index');

// Route::get('/register', 'HomeController@register');

// Route::post('/welcome', 'HomeController@welcome');

Route::get('/', function () {
    return view('welcome', ['title' => 'Task']);
});

Route::get('/data-tables', function () {
    return view('data-tables.index', ['title' => 'Data-Tables']);
});