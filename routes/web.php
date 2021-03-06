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

Route::get('/propiedades-all','WelcomeController@servicios');
Route::get('/baja-california','InmbuebleController@bajaC');
Route::get('/san-luis-potosi','InmbuebleController@sanL');
Route::get('/queretaro','InmbuebleController@qro');
Route::get('/guanajuato','InmbuebleController@Guan');


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

Route::get('/novatech-colon-terreno-industrial', function () {
    return view('paginas.nov3');
});
Route::get('/cerro-de-santa-maria', function () {
    return view('paginas.cerro');
});




Route::post('/filtro','InmbuebleController@filtro');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/inmuebles','InmbuebleController');
Route::resource('/propiedades','PropiedadController');
Route::resource('/ubicaciones','UbicacionController');
Route::resource('/album','AlbumController');
Route::post('/addImages','InmbuebleController@addimg');

Route::delete('/delImages/{id}','InmbuebleController@deleteImg');

Route::delete('/ubicaciones/del/{id}','UbicacionController@delete');
Route::delete('/propiedades/del/{id}','PropiedadController@delete');
Route::delete('/inmuebles/del/{id}','InmbuebleController@delete');

