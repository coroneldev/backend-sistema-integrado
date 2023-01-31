<?php

namespace App\Http\Controllers\Api\Rh\Cl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Puesto;

class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puestos = Puesto::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de puestos recuperados exitosamente',
            'data'      => $puestos
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
        $puesto = new Puesto();
        $puesto->denominacion        = $request->denominacion;
        $puesto->descripcion         = $request->descripcion;
        $puesto->abreviatura         = $request->abreviatura;
        $puesto->nivel_salarial      = $request->nivel_salarial;
        $puesto->haber_mensual       = $request->haber_mensual;
        $puesto->nro_item            = $request->nro_item;
        $puesto->save();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $puesto
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
        $puesto = Puesto::find($id);

        if (is_null($puesto)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $puesto
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
        $puesto = Puesto::find($id);

        if (is_null($puesto)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 200);
        }
        $puesto->denominacion        = $request->denominacion;
        $puesto->descripcion         = $request->descripcion;
        $puesto->abreviatura         = $request->abreviatura;
        $puesto->nivel_salarial      = $request->nivel_salarial;
        $puesto->haber_mensual       = $request->haber_mensual;
        $puesto->nro_item            = $request->nro_item;
        $puesto->save();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $puesto
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
        $puesto = Puesto::find($id);

        if (is_null($puesto)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud no encontrado'
            ], 200);
        }
        $puesto->delete();
        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud eliminado exitosamente',
            'data'      => $puesto
        ], 200);
    }
}
