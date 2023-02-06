<?php

namespace App\Http\Controllers\Api\Rh\Trn;

use App\Http\Controllers\Controller;
use App\Models\Rh\Trn\ExperienciaLaboral;
use Illuminate\Http\Request;

class ExperienciaLaboralController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->only('index');
        $this->middleware('auth:sanctum')->only('store');
        $this->middleware('auth:sanctum')->only('show');
        $this->middleware('auth:sanctum')->only('update');
        $this->middleware('auth:sanctum')->only('destroy');
        $this->middleware('auth:sanctum')->only('ExperienciaLaboralPersonaId');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experienciasLaborales = ExperienciaLaboral::with('persona')->get();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro de Experiencias Laborales recuperadas exitosamente',
            'data'      => $experienciasLaborales
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
        $experienciaLaboral = new ExperienciaLaboral();
        $experienciaLaboral->persona_id                    = $request->persona_id;
        $experienciaLaboral->lugar_trabajo                 = $request->lugar_trabajo;
        $experienciaLaboral->fecha_inicio                  = $request->fecha_inicio;
        $experienciaLaboral->fecha_fin                     = $request->fecha_fin;
        $experienciaLaboral->cargo_desempeniado            = $request->cargo_desempeniado;
        $experienciaLaboral->funcion_desempeniada          = $request->funcion_desempeniada;
        $experienciaLaboral->nombre_inmediato_superior     = $request->nombre_inmediato_superior;
        $experienciaLaboral->cargo_inmediato_superior      = $request->cargo_inmediato_superior;
        $experienciaLaboral->salario_percibido             = $request->salario_percibido;
        $experienciaLaboral->motivo_desvinculacion         = $request->motivo_desvinculacion;
        $experienciaLaboral->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $experienciaLaboral
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
        $experienciaLaboral = ExperienciaLaboral::find($id);
        if (is_null($experienciaLaboral)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $experienciaLaboral
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
        $experienciaLaboral = ExperienciaLaboral::find($id);

        if (is_null($experienciaLaboral)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 200);
        }

        $experienciaLaboral->persona_id                    = $request->persona_id;
        $experienciaLaboral->lugar_trabajo                 = $request->lugar_trabajo;
        $experienciaLaboral->fecha_inicio                  = $request->fecha_inicio;
        $experienciaLaboral->fecha_fin                     = $request->fecha_fin;
        $experienciaLaboral->cargo_desempeniado             = $request->cargo_desempeniado;
        $experienciaLaboral->funcion_desempeniada           = $request->funcion_desempeniada;
        $experienciaLaboral->nombre_inmediato_superior     = $request->nombre_inmediato_superior;
        $experienciaLaboral->cargo_inmediato_superior      = $request->cargo_inmediato_superior;
        $experienciaLaboral->salario_percibido             = $request->salario_percibido;
        $experienciaLaboral->motivo_desvinculacion         = $request->motivo_desvinculacion;
        $experienciaLaboral->save();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $experienciaLaboral
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
        $experienciaLaboral = ExperienciaLaboral::find($id);

        if (is_null($experienciaLaboral)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud no encontrado'
            ], 200);
        }
        $experienciaLaboral->delete();
        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud eliminado exitosamente',
            'data'      => $experienciaLaboral
        ], 200);
    }

    public function ExperienciaLaboralPersonaId($persona_id)
    {
        $experienciaLaboral = ExperienciaLaboral::where('persona_id', $persona_id)->where('vigente', '=', 'true')->get();

        if (is_null($experienciaLaboral)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }
        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $experienciaLaboral
        ], 200);
    }
}
