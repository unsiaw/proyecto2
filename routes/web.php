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
    return view('home');
})->name('inicio');

Route::get('/readme', function () {
    return view('readme');
})->name('readme');

Route::get('/chasis/json','ChasisController@json');
Route::get('/tazas/json','TazasController@json');

Route::get('/tazas/create','TazasController@index')->name('upload.taza');
Route::post('/tazas/create','TazasController@store');

Route::get('/chasis/create','ChasisController@index')->name('upload.chasis');
Route::post('/chasis/create','ChasisController@store');

Route::get('/autos/all','AutosController@index')->name('autos.todos');
Route::get('/autos/{auto}','AutosController@show')->name('autos.uno');
Route::get('/autos/create','AutosController@crearAuto')->name('upload.auto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');
