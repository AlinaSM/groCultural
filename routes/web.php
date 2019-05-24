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
Route::get('/admin/regiones/show/{id}', 'RegionController@show');

Route::get('/admin/religiones/show/{id}', 'ReligionController@show');
Route::get('/admin/lenguajes/show/{id}', 'LenguajeController@show');
Route::get('/admin/tradiciones/show/{id}', 'TradicionController@show');
Route::get('/admin/sitios/show/{id}', 'SitioInteresController@show');
Route::get('/admin/municipios/show/{id}', 'MunicipioController@show');


Route::get('/admin/estado/destroy/{id}', 'EstadoController@destroy');
Route::get('/admin/regiones/destroy/{id}', 'RegionController@destroy');
Route::get('/admin/religiones/destroy/{id}', 'ReligionController@destroy');
Route::get('/admin/lenguajes/destroy/{id}', 'LenguajeController@destroy');
Route::get('/admin/municipios/destroy/{id}', 'MunicipioController@destroy');
Route::get('/admin/sitios/destroy/{id}', 'SitioInteresController@destroy');

Route::get('/sitios/sitio/{id}', 'SitioInteresController@infoSitio');

Route::get('/tradiciones/tradicion/{id}', 'TradicionController@infoTradicion');


Route::get('/sitios/mostrarSitios/tipo/{idTipo}', 'SitioInteresController@userSitiosDeInteresByTipo');
Route::get('/sitios/mostrarSitios/municipio/{idMunicipio}', 'SitioInteresController@userSitiosDeInteresByLugar');
Route::get('/sitios/mostrarSitios/tipo/{idTipo}/municipio/{idMunicipio}', 'SitioInteresController@userSitiosDeInteresByLugarAndTipo');


Route::get('/tradiciones/mostrarTradiciones/tipo/{idTipo}', 'TradicionController@userTradicionByTipo');
Route::get('/tradiciones/mostrarTradiciones/municipio/{idMunicipio}', 'TradicionController@userTradicionByLugar');
Route::get('/tradiciones/mostrarTradiciones/tipo/{idTipo}/municipio/{idMunicipio}', 'TradicionController@userTradicionByLugarAndTipo');

Route::get('/sitios/vr-sitio/5', 'SitioInteresController@escenarioVr');
Route::get('/regiones/tablaRegionesByEstado/{id}', 'RegionController@tablaRegionesByEstado');
Route::get('/regiones/regionesByEstado/{id}', 'RegionController@regionesByEstado');
Route::get('/estados/getAll', 'EstadoController@getAllElements');
Route::get('/tipositios/getAll', 'TipoSitioInteresController@getAllElements');
Route::get('/tipotradicion/getAll', 'TipoTradicionController@getAllElements');


Route::get('/tradiciones/tablaMostrarTasks/{id}', 'TradicionController@tablaTradicionesByTipo');
Route::get('/sitios/tablaMostrarTasks/{id}', 'SitioInteresController@tablaSitiosDeInteresByTipo');
Route::get('/municipios/tablaMunicipiosByRegion/{idRegion}', 'MunicipioController@tablaMunicipiosByRegion');
Route::get('/municipios/getByRegiones/{idRegion}', 'MunicipioController@municipiosByRegiones');
Route::get('/municipios/getAllInformation/{id}', 'MunicipioController@getAllInformation');
Route::get('/municipios/allFromAllRegiones/', 'MunicipioController@listadoDeMunicipiosClasificadoPorRegiones');


Route::get('/admin/lenguajes/asignar/{id}', 'LenguajeController@asignarLugarView');
Route::get('/admin/religiones/asignar/{id}', 'ReligionController@asignarLugarView');
Route::get('/admin/tradiciones/asignar/{id}', 'TradicionController@asignarLugarView');

Route::get('/admin/lenguajes/coleccionDeLugares/{id}', 'LenguajeController@coleccionDeLugares');

Route::get('/admin/tradiciones/getMunicipios/{id}', 'TradicionController@tablaMunicipios');

Route::get('/asignarlenguajes/lenguaje/{idLenguaje}/municipio/{idMunicipio}', 'LenguajeController@asignarUnLugar');
Route::get('/asignartradicion/tradicion/{idTradicion}/municipio/{idMunicipio}', 'TradicionController@asignarUnLugar');


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
