<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


use App\Http\Controllers\Api\Rh\Cl\SistemaController;


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

Route::post('registrar', [UserController::class, 'registrar']);
Route::post('ingresar', [UserController::class, 'ingresar']);

Route::prefix('rh')->group(function () {
    Route::get('/sistemas', [SistemaController::class, 'index']);
    Route::post('/sistemas', [SistemaController::class, 'store']);
    Route::get('/sistemas/{id}', [SistemaController::class, 'show']);
    Route::put('/sistemas/{id}', [SistemaController::class, 'update']);
    Route::delete('/sistemas/{id}', [SistemaController::class, 'destroy']);

    Route::post('salir', [UserController::class, 'salir']);
});
