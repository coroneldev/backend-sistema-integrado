<?php

namespace App\Http\Controllers\Api\Rh\Trn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rh\Trn\Acceso;

class AccesoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->only('index');
        $this->middleware('auth:sanctum')->only('store');
        $this->middleware('auth:sanctum')->only('show');
        $this->middleware('auth:sanctum')->only('update');
        $this->middleware('auth:sanctum')->only('destroy');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accesos = Acceso::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de accesos recuperados exitosamente',
            'data'      => $accesos
        ], 200);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $acceso = new Acceso();
        $acceso->user_id        = $request->user_id;
        $acceso->menu_id        = $request->menu_id;
        $acceso->rol_id         = $request->rol_id;
        $acceso->vigente        = $request->vigente;
        $acceso->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $acceso
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $acceso = Acceso::find($id);

        if (is_null($acceso)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $acceso
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $acceso = Acceso::find($id);

        if (is_null($acceso)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 200);
        }

        $acceso->user_id        = $request->user_id;
        $acceso->menu_id        = $request->menu_id;
        $acceso->rol_id         = $request->rol_id;
        $acceso->vigente        = $request->vigente;
        $acceso->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $acceso
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acceso = Acceso::find($id);

        if (is_null($acceso)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud no encontrado'
            ], 200);
        }
        $acceso->delete();
        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud eliminado exitosamente',
            'data'      => $acceso
        ], 200);
    }

    public function accesoIdUsuario($user_id)
    {
        $usuario = Acceso::where('user_id', $user_id)->with('rol')->first();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro, recuperado exitosamente',
            'data'      => $usuario
        ], 200);
    }
}
