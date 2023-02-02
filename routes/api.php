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
use App\Http\Controllers\Api\Rh\Cl\ClasificacionController;
use App\Http\Controllers\Api\Rh\Cl\EstructuraOrganizacionalController;
use App\Http\Controllers\Api\Rh\Cl\HorarioController;
use App\Http\Controllers\Api\Rh\Cl\IdentificadorController;
use App\Http\Controllers\Api\Rh\Cl\OrganismoFinanciadorController;
use App\Http\Controllers\Api\Rh\Cl\PuestoController;
use App\Http\Controllers\Api\Rh\Cl\TipoContratoController;
use App\Http\Controllers\Api\Rh\Cl\IdiomaController;

/*Transacciones*/
use App\Http\Controllers\Api\Rh\Trn\PersonaController;
use App\Http\Controllers\Api\Rh\Trn\ParentescosController;

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

    /*Clafificadores*/
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

    Route::get('/clasificaciones', [ClasificacionController::class, 'index']);
    Route::post('/clasificaciones', [ClasificacionController::class, 'store']);
    Route::get('/clasificaciones/{id}', [ClasificacionController::class, 'show']);
    Route::put('/clasificaciones/{id}', [ClasificacionController::class, 'update']);
    Route::delete('/clasificaciones/{id}', [ClasificacionController::class, 'destroy']);
    
    Route::get('/estructuras-organizacionales', [EstructuraOrganizacionalController::class, 'index']);
    Route::post('/estructuras-organizacionales', [EstructuraOrganizacionalController::class, 'store']);
    Route::get('/estructuras-organizacionales/{id}', [EstructuraOrganizacionalController::class, 'show']);
    Route::put('/estructuras-organizacionales/{id}', [EstructuraOrganizacionalController::class, 'update']);
    Route::delete('/estructuras-organizacionales/{id}', [EstructuraOrganizacionalController::class, 'destroy']);

    Route::get('/horarios', [HorarioController::class, 'index']);
    Route::post('/horarios', [HorarioController::class, 'store']);
    Route::get('/horarios/{id}', [HorarioController::class, 'show']);
    Route::put('/horarios/{id}', [HorarioController::class, 'update']);
    Route::delete('/horarios/{id}', [HorarioController::class, 'destroy']);

    Route::get('/identificadores', [IdentificadorController::class, 'index']);
    Route::post('/identificadores', [IdentificadorController::class, 'store']);
    Route::get('/identificadores/{id}', [IdentificadorController::class, 'show']);
    Route::put('/identificadores/{id}', [IdentificadorController::class, 'update']);
    Route::delete('/identificadores/{id}', [IdentificadorController::class, 'destroy']);

    Route::get('/organismos-finaciadores', [OrganismoFinanciadorController::class, 'index']);
    Route::post('/organismos-finaciadores', [OrganismoFinanciadorController::class, 'store']);
    Route::get('/organismos-finaciadores/{id}', [OrganismoFinanciadorController::class, 'show']);
    Route::put('/organismos-finaciadores/{id}', [OrganismoFinanciadorController::class, 'update']);
    Route::delete('/organismos-finaciadores/{id}', [OrganismoFinanciadorController::class, 'destroy']);

    Route::get('/puestos', [PuestoController::class, 'index']);
    Route::post('/puestos', [PuestoController::class, 'store']);
    Route::get('/puestos/{id}', [PuestoController::class, 'show']);
    Route::put('/puestos/{id}', [PuestoController::class, 'update']);
    Route::delete('/puestos/{id}', [PuestoController::class, 'destroy']);

    Route::get('/tipos-contratos', [TipoContratoController::class, 'index']);
    Route::post('/tipos-contratos', [TipoContratoController::class, 'store']);
    Route::get('/tipos-contratos/{id}', [TipoContratoController::class, 'show']);
    Route::put('/tipos-contratos/{id}', [TipoContratoController::class, 'update']);
    Route::delete('/tipos-contratos/{id}', [TipoContratoController::class, 'destroy']);

    Route::get('/idiomas', [IdiomaController::class, 'index']);
    Route::post('/idiomas', [IdiomaController::class, 'store']);
    Route::get('/idiomas/{id}', [IdiomaController::class, 'show']);
    Route::put('/idiomas/{id}', [IdiomaController::class, 'update']);
    Route::delete('/idiomas/{id}', [IdiomaController::class, 'destroy']);

    /*Transacciones*/ 
    /*Registro de Personas*/
    Route::get('/personas', [PersonaController::class, 'index']);
    Route::post('/personas', [PersonaController::class, 'store']);
    Route::get('/personas/{id}', [PersonaController::class, 'show']);
    Route::put('/personas/{id}', [PersonaController::class, 'update']);
    Route::delete('/personas/{id}', [PersonaController::class, 'destroy']);
    Route::get('/personas/verifica-finalizado/{estFin}', [PersonaController::class, 'datosRegistrados']);
    Route::get('/personas/administrador-verifica/{estFin}', [PersonaController::class, 'revisadoAdmin']);
    Route::get('/personas/usuario/{usuario_id}', [PersonaController::class, 'personaUsuarioId']);

    /*Relacion Personal*/
    Route::get('/parentescos-personas', [ParentescosController::class, 'index']);
    Route::post('/parentescos-personas', [ParentescosController::class, 'store']);
    Route::get('/parentescos-personas/{id}', [ParentescosController::class, 'show']);
    Route::put('/parentescos-personas/{id}', [ParentescosController::class, 'update']);
    Route::delete('/parentescos-personas/{id}', [ParentescosController::class, 'destroy']);
    Route::get('/parentescos-personas/persona/{persona_id}', [ParentescosController::class, 'parentescoPersonaId']);


});

Route::prefix('pv')->group(function () {

});
Route::prefix('af')->group(function () {

});
Route::prefix('ar')->group(function () {

});
