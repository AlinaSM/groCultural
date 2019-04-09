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
});

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/logout', function () {
    return view('admin.login');
});


Route::get('/logout', 'LoginController@logout');
Route::get('/admin/estados/tasks', 'EstadoController@tasks');
Route::get('/admin/regiones/tasks', 'RegionController@tasks');
Route::get('/admin/municipios/tasks', 'MunicipioController@tasks');
Route::get('/admin/tradiciones/tasks', 'TradicionController@tasks');
Route::get('/admin/sitios/tasks', 'SitioInteresController@tasks');
Route::get('/admin/religiones/tasks', 'ReligionController@tasks');
Route::get('/admin/lenguajes/tasks', 'LenguajeController@tasks');
Route::get('/admin/fauna/tasks', 'FaunaController@tasks');
Route::get('/admin/flora/tasks', 'FloraController@tasks');

Route::get('/admin/estado/show/{id}', 'EstadoController@show');
//Route::get('/admin/estado/show/{id}/e', 'EstadoController@show');
Route::get('/admin/estado/destroy/{id}', 'EstadoController@destroy');


Route::resources([
    'usuarios'    =>  'UsuarioController',
    'admin'       =>  'LoginController',
    'estado'      =>  'EstadoController',
    'fauna'       =>  'FaunaController',
    'flora'       =>  'FloraController',
    'lenguajes'   =>  'LenguajeController',
    'municipios'  =>  'MunicipioController',
    'regiones'    =>  'RegionController',
    'religiones'  =>  'ReligionController',
    'sitios'      =>  'SitioInteresController',
    'tradiciones' =>  'TradicionController'
]);
