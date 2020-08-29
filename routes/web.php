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

Route::get('/','WelcomeController@welcome');

Route::get('/quienes-somos', function () {
    return view('somos');
});

Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/bolsa-de-trabajo', function () {
    return view('bolsa');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
