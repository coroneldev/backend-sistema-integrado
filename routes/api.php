<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\Api\Rh\Cl\SistemaController;
use App\Http\Controllers\Api\Rh\Cl\MenuController;
use App\Http\Controllers\Api\Rh\Cl\RolController;
use App\Http\Controllers\Api\Rh\Trn\AccesoController;

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

});
Route::prefix('pv')->group(function () {

});
Route::prefix('af')->group(function () {

});
Route::prefix('ar')->group(function () {

});
