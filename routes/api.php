<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Administracion de sistema*/
use App\Http\Controllers\Api\Rh\Trn\UserController;
use App\Http\Controllers\Api\Rh\Cl\SistemaController;
use App\Http\Controllers\Api\Rh\Trn\MenuController;
use App\Http\Controllers\Api\Rh\Cl\RolController;
use App\Http\Controllers\Api\Rh\Trn\AccesoController;

/*Recursos Humanos*/

/*Clasificadores*/
use App\Http\Controllers\Api\Rh\Cl\EstadoCivilController;
use App\Http\Controllers\Api\Rh\Cl\GeneroController;
use App\Http\Controllers\Api\Rh\Cl\PaisController;
use App\Http\Controllers\Api\Rh\Cl\CiudadController;
use App\Http\Controllers\Api\Rh\Cl\ParentescoController;
use App\Http\Controllers\Api\Rh\Cl\TipoDocumentoController;
use App\Http\Controllers\Api\Rh\Cl\InstitucionController;
use App\Http\Controllers\Api\Rh\Cl\NivelEstudioController;
use App\Http\Controllers\Api\Rh\Cl\EstadoController;
use App\Http\Controllers\Api\Rh\Cl\CategoriaViajeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
    return response()->json(['status' => 'OK', 'mensaje' => 'BACKEND SISTEMA INTEGRADO CORRIENDO !!!'], 200);
});

Route::post('usuarios/registrar', [UserController::class, 'registrar']);
Route::post('usuarios/ingresar', [UserController::class, 'ingresar']);

Route::prefix('sys')->group(function () {

    Route::get('usuarios', [UserController::class, 'index']);

    Route::get('/sistemas', [SistemaController::class, 'index']);
    Route::post('/sistemas', [SistemaController::class, 'store']);
    Route::get('/sistemas/{id}', [SistemaController::class, 'show']);
    Route::put('/sistemas/{id}', [SistemaController::class, 'update']);
    Route::delete('/sistemas/{id}', [SistemaController::class, 'destroy']);

    Route::get('/menus', [MenuController::class, 'index']);
    Route::post('/menus', [MenuController::class, 'store']);
    Route::get('/menus/{id}', [MenuController::class, 'show']);
    Route::put('/menus/{id}', [MenuController::class, 'update']);
    Route::delete('/menus/{id}', [MenuController::class, 'destroy']);

    Route::get('/roles', [RolController::class, 'index']);
    Route::post('/roles', [RolController::class, 'store']);
    Route::get('/roles/{id}', [RolController::class, 'show']);
    Route::put('/roles/{id}', [RolController::class, 'update']);
    Route::delete('/roles/{id}', [RolController::class, 'destroy']);

    Route::get('/accesos', [AccesoController::class, 'index']);
    Route::post('/accesos', [AccesoController::class, 'store']);
    Route::get('/accesos/{id}', [AccesoController::class, 'show']);
    Route::put('/accesos/{id}', [AccesoController::class, 'update']);
    Route::delete('/accesos/{id}', [AccesoController::class, 'destroy']);

    Route::post('usuarios/salir', [UserController::class, 'salir']);
});

Route::prefix('rh')->group(function () {

    Route::get('/estados-civiles', [EstadoCivilController::class, 'index']);
    Route::post('/estados-civiles', [EstadoCivilController::class, 'store']);
    Route::get('/estados-civiles/{id}', [EstadoCivilController::class, 'show']);
    Route::put('/estados-civiles/{id}', [EstadoCivilController::class, 'update']);
    Route::delete('/estados-civiles/{id}', [EstadoCivilController::class, 'destroy']);
    
    Route::get('/generos', [GeneroController::class, 'index']);
    Route::post('/generos', [GeneroController::class, 'store']);
    Route::get('/generos/{id}', [GeneroController::class, 'show']);
    Route::put('/generos/{id}', [GeneroController::class, 'update']);
    Route::delete('/generos/{id}', [GeneroController::class, 'destroy']);

    Route::get('/paises', [PaisController::class, 'index']);
    Route::post('/paises', [PaisController::class, 'store']);
    Route::get('/paises/{id}', [PaisController::class, 'show']);
    Route::put('/paises/{id}', [PaisController::class, 'update']);
    Route::delete('/paises/{id}', [PaisController::class, 'destroy']);
    
    Route::get('/ciudades', [CiudadController::class, 'index']);
    Route::post('/ciudades', [CiudadController::class, 'store']);
    Route::get('/ciudades/{id}', [CiudadController::class, 'show']);
    Route::put('/ciudades/{id}', [CiudadController::class, 'update']);
    Route::delete('/ciudades/{id}', [CiudadController::class, 'destroy']);

    Route::get('/parentescos', [ParentescoController::class, 'index']);
    Route::post('/parentescos', [ParentescoController::class, 'store']);
    Route::get('/parentescos/{id}', [ParentescoController::class, 'show']);
    Route::put('/parentescos/{id}', [ParentescoController::class, 'update']);
    Route::delete('/parentescos/{id}', [ParentescoController::class, 'destroy']);

    Route::get('/tipos-documentos', [TipoDocumentoController::class, 'index']);
    Route::post('/tipos-documentos', [TipoDocumentoController::class, 'store']);
    Route::get('/tipos-documentos/{id}', [TipoDocumentoController::class, 'show']);
    Route::put('/tipos-documentos/{id}', [TipoDocumentoController::class, 'update']);
    Route::delete('/tipos-documentos/{id}', [TipoDocumentoController::class, 'destroy']);

    Route::get('/instituciones', [InstitucionController::class, 'index']);
    Route::post('/instituciones', [InstitucionController::class, 'store']);
    Route::get('/instituciones/{id}', [InstitucionController::class, 'show']);
    Route::put('/instituciones/{id}', [InstitucionController::class, 'update']);
    Route::delete('/instituciones/{id}', [InstitucionController::class, 'destroy']);

    Route::get('/niveles-estudios', [NivelEstudioController::class, 'index']);
    Route::post('/niveles-estudios', [NivelEstudioController::class, 'store']);
    Route::get('/niveles-estudios/{id}', [NivelEstudioController::class, 'show']);
    Route::put('/niveles-estudios/{id}', [NivelEstudioController::class, 'update']);
    Route::delete('/niveles-estudios/{id}', [NivelEstudioController::class, 'destroy']);

    Route::get('/estados', [EstadoController::class, 'index']);
    Route::post('/estados', [EstadoController::class, 'store']);
    Route::get('/estados/{id}', [EstadoController::class, 'show']);
    Route::put('/estados/{id}', [EstadoController::class, 'update']);
    Route::delete('/estados/{id}', [EstadoController::class, 'destroy']);
    Route::get('/estados/seccion/{seccion_id}', [EstadoController::class, 'estadosPorSeccion']);

    Route::get('/catetgorias-viaje', [CategoriaViajeController::class, 'index']);
    Route::post('/catetgorias-viaje', [CategoriaViajeController::class, 'store']);
    Route::get('/catetgorias-viaje/{id}', [CategoriaViajeController::class, 'show']);
    Route::put('/catetgorias-viaje/{id}', [CategoriaViajeController::class, 'update']);
    Route::delete('/catetgorias-viaje/{id}', [CategoriaViajeController::class, 'destroy']);



});

Route::prefix('pv')->group(function () {

});
Route::prefix('af')->group(function () {

});
Route::prefix('ar')->group(function () {

});
