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
})->name('global.inicio');

Route::get('/readme', function () {
    return view('readme');
})->name('global.readme');

Route::get('/chasis/json','ChasisController@json')->name('chasis.json');
Route::get('/chasis/json/{id}','ChasisController@jsonId')->name('chasis.json.id');
Route::get('/tazas/json','TazasController@json')->name('tazas.json');
Route::get('/tazas/json/{id}','TazasController@jsonId')->name('tazas.json.id');

Route::get('/tazas/create','TazasController@index')->name('tazas.admin.create');
Route::post('/tazas/create','TazasController@store');
Route::get('/tazas/all', 'TazasController@all')->name('tazas.admin.all');

Route::get('/chasis/create','ChasisController@index')->name('chasis.admin.create');
Route::post('/chasis/create','ChasisController@store');
Route::get('/chasis/all', 'ChasisController@all')->name('chasis.admin.all');

Route::get('/autos/mine', 'AutosUserController@index')->name('autos.user.all')->middleware('auth');
Route::get('/autos/create','AutosUserController@create')->name('autos.user.create');
Route::post('/autos/create','AutosUserController@store');
Route::get('/autos/all','AutosAdminController@index')->name('autos.admin.all')->middleware('admin');

// Dejar estas rutas para lo ultimo. EL ORDEN DE LAS RUTAS IMPORTA!
Route::get('/autos/{auto}','AutosAdminController@show')->name('autos.uno');
Route::get('/tazas/{tazas}','TazasController@show')->name('tazas.uno');
Route::get('/chasis/{chasis}','ChasisController@show')->name('chasis.uno');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');
