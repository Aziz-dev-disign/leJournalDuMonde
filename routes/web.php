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


// single page

Route::get('contact', function () {
    return view('pages.contact');
});

Route::get('single', function () {
    return view('pages.single_page');
});

//les routes de l'actualites
Route::get('/','ActualiteController@index');


// les routes du newsletters
Route::get('index','ActualiteController@index');
Route::post('index','ActualiteController@send');

// les routes des pages admin 

Route::group(['prefix' => 'admin'], function () {
    Route::get('actualite', 'ActualiteAdminController@index');
    Route::post('actualite/create', 'ActualiteController@store')->name('actualite_create');
    Route::get('categorie', 'ActualiteAdminController@test');    
    Route::post('categorie/create', 'ActualiteAdminController@create')->name('test');
    Route::get('liste', 'ActualiteAdminController@liste');    
    Route::get('actualite/edit/{actualite}', 'ActualiteAdminController@edit');
    Route::get('actualite/update/{actualite}', 'ActualiteAdminController@update');
});


// les routes de voyager
Route::group(['prefix' => 'voyager'], function () {
    Voyager::routes();
});


//les routes de l'authentification
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
