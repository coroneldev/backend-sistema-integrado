<?php

namespace App\Http\Controllers\Api\Rh\Cl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rh\Cl\CategoriaViaje;

class CategoriaViajeController extends Controller
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
        $categoriaViajes = CategoriaViaje::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de categoria de viajes recuperados exitosamente',
            'data'      => $categoriaViajes
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
        $categoriaViaje = new CategoriaViaje();
        $categoriaViaje->descripcion        = $request->descripcion;
        $categoriaViaje->save();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $categoriaViaje
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
        $categoriaViaje = CategoriaViaje::find($id);
        if (is_null($categoriaViaje)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $categoriaViaje
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
        $categoriaViaje = CategoriaViaje::find($id);

        if (is_null($categoriaViaje)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 200);
        }
        $categoriaViaje->descripcion        = $request->descripcion;
        $categoriaViaje->save();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $categoriaViaje
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
        $categoriaViaje = CategoriaViaje::find($id);

        if (is_null($categoriaViaje)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud no encontrado'
            ], 200);
        }
        $categoriaViaje->delete();
        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud eliminado exitosamente',
            'data'      => $categoriaViaje
        ], 200);
    }
}
