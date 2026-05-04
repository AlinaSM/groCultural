<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\TradicionController;
use App\Http\Controllers\SitioInteresController;
use App\Http\Controllers\ReligionController;
use App\Http\Controllers\LenguajeController;
use App\Http\Controllers\FaunaController;
use App\Http\Controllers\FloraController;
use App\Http\Controllers\TipoSitioInteresController;
use App\Http\Controllers\TipoTradicionController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
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

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/admin/estados/tasks', [EstadoController::class, 'tasks']);
Route::get('/admin/regiones/tasks', [RegionController::class, 'tasks']);
Route::get('/admin/municipios/tasks', [MunicipioController::class, 'tasks']);
Route::get('/admin/tradiciones/tasks', [TradicionController::class, 'tasks']);
Route::get('/admin/sitios/tasks', [SitioInteresController::class, 'tasks']);
Route::get('/admin/religiones/tasks', [ReligionController::class, 'tasks']);
Route::get('/admin/lenguajes/tasks', [LenguajeController::class, 'tasks']);
Route::get('/admin/fauna/tasks', [FaunaController::class, 'tasks']);
Route::get('/admin/flora/tasks', [FloraController::class, 'tasks']);

Route::get('/admin/estado/show/{id}', [EstadoController::class, 'show']);
Route::get('/admin/regiones/show/{id}', [RegionController::class, 'show']);

Route::get('/admin/religiones/show/{id}', [ReligionController::class, 'show']);
Route::get('/admin/lenguajes/show/{id}', [LenguajeController::class, 'show']);
Route::get('/admin/tradiciones/show/{id}', [TradicionController::class, 'show']);
Route::get('/admin/sitios/show/{id}', [SitioInteresController::class, 'show']);
Route::get('/admin/municipios/show/{id}', [MunicipioController::class, 'show']);

Route::get('/admin/estado/destroy/{id}', [EstadoController::class, 'destroy']);
Route::get('/admin/regiones/destroy/{id}', [RegionController::class, 'destroy']);
Route::get('/admin/religiones/destroy/{id}', [ReligionController::class, 'destroy']);
Route::get('/admin/lenguajes/destroy/{id}', [LenguajeController::class, 'destroy']);
Route::get('/admin/municipios/destroy/{id}', [MunicipioController::class, 'destroy']);
Route::get('/admin/sitios/destroy/{id}', [SitioInteresController::class, 'destroy']);

Route::get('/sitios/sitio/{id}', [SitioInteresController::class, 'infoSitio']);
Route::get('/tradiciones/tradicion/{id}', [TradicionController::class, 'infoTradicion']);

Route::get('/sitios/mostrarSitios/tipo/{idTipo}', [SitioInteresController::class, 'userSitiosDeInteresByTipo']);
Route::get('/sitios/mostrarSitios/municipio/{idMunicipio}', [SitioInteresController::class, 'userSitiosDeInteresByLugar']);
Route::get('/sitios/mostrarSitios/tipo/{idTipo}/municipio/{idMunicipio}', [SitioInteresController::class, 'userSitiosDeInteresByLugarAndTipo']);

Route::get('/tradiciones/mostrarTradiciones/tipo/{idTipo}', [TradicionController::class, 'userTradicionByTipo']);
Route::get('/tradiciones/mostrarTradiciones/municipio/{idMunicipio}', [TradicionController::class, 'userTradicionByLugar']);
Route::get('/tradiciones/mostrarTradiciones/tipo/{idTipo}/municipio/{idMunicipio}', [TradicionController::class, 'userTradicionByLugarAndTipo']);

Route::get('/sitios/vr-sitio/5', [SitioInteresController::class, 'escenarioVr']);
Route::get('/regiones/tablaRegionesByEstado/{id}', [RegionController::class, 'tablaRegionesByEstado']);
Route::get('/regiones/regionesByEstado/{id}', [RegionController::class, 'regionesByEstado']);
Route::get('/estados/getAll', [EstadoController::class, 'getAllElements']);
Route::get('/tipositios/getAll', [TipoSitioInteresController::class, 'getAllElements']);
Route::get('/tipotradicion/getAll', [TipoTradicionController::class, 'getAllElements']);

Route::get('/tradiciones/tablaMostrarTasks/{id}', [TradicionController::class, 'tablaTradicionesByTipo']);
Route::get('/sitios/tablaMostrarTasks/{id}', [SitioInteresController::class, 'tablaSitiosDeInteresByTipo']);
Route::get('/municipios/tablaMunicipiosByRegion/{idRegion}', [MunicipioController::class, 'tablaMunicipiosByRegion']);
Route::get('/municipios/getByRegiones/{idRegion}', [MunicipioController::class, 'municipiosByRegiones']);
Route::get('/municipios/getAllInformation/{id}', [MunicipioController::class, 'getAllInformation']);
Route::get('/municipios/allFromAllRegiones', [MunicipioController::class, 'listadoDeMunicipiosClasificadoPorRegiones']);
Route::get('/lenguajes/getInfo/{id}', [LenguajeController::class, 'getInfo']);
Route::get('/religiones/getInfo/{id}', [ReligionController::class, 'getInfo']);

Route::get('/admin/lenguajes/asignar/{id}', [LenguajeController::class, 'asignarLugarView']);
Route::get('/admin/religiones/asignar/{id}', [ReligionController::class, 'asignarLugarView']);
Route::get('/admin/tradiciones/asignar/{id}', [TradicionController::class, 'asignarLugarView']);

Route::get('/admin/lenguajes/coleccionDeLugares/{id}', [LenguajeController::class, 'coleccionDeLugares']);

Route::get('/admin/tradiciones/getMunicipios/{id}', [TradicionController::class, 'tablaMunicipios']);

Route::get('/asignarlenguajes/lenguaje/{idLenguaje}/municipio/{idMunicipio}', [LenguajeController::class, 'asignarUnLugar']);
Route::get('/asignartradicion/tradicion/{idTradicion}/municipio/{idMunicipio}', [TradicionController::class, 'asignarUnLugar']);

Route::resources([
    'usuarios'    => UsuarioController::class,
    'admin'       => LoginController::class,
    'estado'      => EstadoController::class,
    'fauna'       => FaunaController::class,
    'flora'       => FloraController::class,
    'lenguajes'   => LenguajeController::class,
    'municipios'  => MunicipioController::class,
    'regiones'    => RegionController::class,
    'religiones'  => ReligionController::class,
    'sitios'      => SitioInteresController::class,
    'tradiciones' => TradicionController::class
]);
