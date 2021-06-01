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
    return view('welcome');
});

Route::resource('zapatos', 'App\Http\Controllers\CbzapatosController');
Route::resource('venta', 'App\Http\Controllers\CbventaController');
Route::delete('zapatos/{zapato}', 'App\Http\Controllers\CbzapatosController@destroy')->name('zapatos.destroy');
Route::get('zapatos/{zapato?}/edit', 'CbzapatosController@edit')->name('zapatos.edit');
Route::post('zapatos/{zapato?}/edit', 'App\Http\Controllers\CbzapatosController@update');