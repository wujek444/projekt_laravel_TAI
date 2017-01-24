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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', 'PagesController@index');
Route::get('/regulamin', 'PagesController@regulamin');
Route::get('/galeria', 'PagesController@galeria');
Route::get('/wypozycz', 'PagesController@wypozycz');