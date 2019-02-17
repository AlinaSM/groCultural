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

Route::get('/nombre/{name}/apellido/{lastname?}', function ($name, $lastname = '[REDACTED]') {
    return 'Hola '.$name. ' ' .$lastname.'!, ¿Como estas?';
});



Route::resources([
    'estado' => 'EstadoController',
    'fauna' => 'FaunaController',
    'flora' => 'FloraController',
    'lenguajes' => 'LenguajeController',
    'municipios' => 'MunicipioController',
    'regiones' => 'RegionController',
    'religiones' => 'ReligionController',
    'sitios' => 'SitioInteresController',
    'tradiciones' => 'TradicionController'
]);
