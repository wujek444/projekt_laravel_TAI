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

Route::get('/', 'PagesController@index');


Route::group([
    'middleware' => 'roles',
    'roles' => ['Admin', 'User']//do tej grupy dostęp mają admin i user
], function(){
    Route::get('/dane_uzytkownika', 'PagesController@dane_uzytkownika');
//    Route::get('/zmiana_danych_uzytkownika', 'PagesController@zmiana_danych_uzytkownika');
    Route::get('/user_update', 'UserController@update');

});

Route::get('/index', 'PagesController@index');
Route::get('/regulamin', 'PagesController@regulamin');
Route::get('/galeria', 'PagesController@galeria');

Route::get('/logout', function(){
    Auth::logout();
    //return view('index')->with('message', 'Zostałeś wylogowany!');
    return Redirect::to('/index')->with('logout_message', 'Zostałeś wylogowany!');
});


Route::group(['middleware' => ['web']], function(){
    Route::resource('blog', 'BlogController');
    Route::resource('library', 'LibraryController');
    Route::resource('messages', 'MessageController');
    Route::resource('zmiana_danych_uzytkownika', 'UserController');
});
Route::get('/zmiana_danych_uzytkownika', 'UserController@zmiana_danych_uzytkownika');



Auth::routes();

//Route::get('/home', 'HomeController@index');
