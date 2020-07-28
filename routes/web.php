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

// les routes du newsletters
Route::get('index','NewsLetterController@index');
Route::post('index','NewsLetterController@store');


// les routes de voyager
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//les routes de l'authentification
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
