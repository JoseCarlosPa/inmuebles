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

Route::get('/novatech-apaseo-terrenos-industriales', function () {
    return view('paginas.nov1');
});
Route::get('/novatech-silao-terrenos-industriales', function () {
    return view('paginas.nov2');
});

Route::get('/propiedad-rancho-san-pedro', function () {
    return view('paginas.sanp');
});
Route::get('/patio-logistico-emiliano-zapata', function () {
    return view('paginas.pat');
});

Route::get('/patio-logistico-san-isidro', function () {
    return view('paginas.logi');
});





Route::post('/filtro','InmbuebleController@filtro');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/inmuebles','InmbuebleController');
Route::resource('/propiedades','PropiedadController');
Route::resource('/ubicaciones','UbicacionController');

Route::delete('/ubicaciones/del/{id}','UbicacionController@delete');
Route::delete('/propiedades/del/{id}','PropiedadController@delete');
Route::delete('/inmuebles/del/{id}','InmbuebleController@delete');

