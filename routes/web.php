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
    return view('index');
});

Route::get('contact', function () {
    return view('pages.contact1');
});


// les routes du newsletters
Route::get('index','NewsLetterController@index');
Route::post('index','NewsLetterController@store');

// les routes des pages admin 

Route::group(['prefix' => 'admin'], function () {
    Route::get('actualite', 'ActualiteController@index');
    Route::post('actualite/create', 'ActualiteController@store')->name('actualite_create');

    Route::get('liste', 'ActualiteController@test');    
    Route::post('liste/create', 'ActualiteController@create')->name('test');
});


// les routes de voyager
Route::group(['prefix' => 'voyager'], function () {
    Voyager::routes();
});


//les routes de l'authentification
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
