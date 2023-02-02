<?php

namespace App\Http\Controllers\Api\Rh\Trn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rh\Trn\Curso;

class CursoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->only('index');
        $this->middleware('auth:sanctum')->only('store');
        $this->middleware('auth:sanctum')->only('show');
        $this->middleware('auth:sanctum')->only('update');
        $this->middleware('auth:sanctum')->only('destroy');
        $this->middleware('auth:sanctum')->only('cursoTipoPersonaId');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de cursos recuperadas exitosamente',
            'data'      => $cursos
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
        $curso = new Curso();
        $curso->persona_id                    = $request->persona_id;
        $curso->estado_id                     = $request->estado_id;
        $curso->institucion_id                = $request->institucion_id;
        $curso->fecha_inicio                  = $request->fecha_inicio;
        $curso->fecha_fin                     = $request->fecha_fin;
        $curso->nombre                        = $request->nombre;
        $curso->duracion                      = $request->duracion;
        $curso->tipo                          = $request->tipo;
        $curso->vigente                       = $request->vigente;
        $curso->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $curso
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
        $curso = Curso::find($id);

        if (is_null($curso)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $curso
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
        $curso = Curso::find($id);

        if (is_null($curso)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 200);
        }

        $curso->persona_id                    = $request->persona_id;
        $curso->estado_id                     = $request->estado_id;
        $curso->institucion_id                = $request->institucion_id;
        $curso->fecha_inicio                  = $request->fecha_inicio;
        $curso->fecha_fin                     = $request->fecha_fin;
        $curso->nombre                        = $request->nombre;
        $curso->duracion                      = $request->duracion;
        $curso->tipo                          = $request->tipo;
        $curso->vigente                       = $request->vigente;
        $curso->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $curso
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
        $curso = Curso::find($id);

        if (is_null($curso)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud no encontrado'
            ], 200);
        }
        $curso->delete();
        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud eliminado exitosamente',
            'data'      => $curso
        ], 200);
    }
    
    public function cursoTipoPersonaId($persona_id, $tipo)
    {
        $curso = Curso::where('persona_id', $persona_id)->where('tipo', $tipo)->where('vigente', '=', 'true')->with('persona', 'estado', 'institucion')->get();

        if (is_null($curso)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }
        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $curso
        ], 200);
    }

}
