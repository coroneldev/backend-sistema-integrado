<?php

namespace App\Http\Controllers\Api\Rh\Trn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rh\Trn\FormacionAcademica;
use Illuminate\Support\Facades\Validator;

class FormacionAcademicaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->only('index');
        $this->middleware('auth:sanctum')->only('store');
        $this->middleware('auth:sanctum')->only('show');
        $this->middleware('auth:sanctum')->only('update');
        $this->middleware('auth:sanctum')->only('destroy');
        $this->middleware('auth:sanctum')->only('formacionPersonaId');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formaciones = FormacionAcademica::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de formaciones academicas recuperadas exitosamente',
            'data'      => $formaciones
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
        $validator = Validator::make(
            $request->all(),
            [
                'persona_id'                        => 'required',
                'pais_id'                           => 'required',
                'ciudad_id'                         => 'required',
                'institucion_id'                    => 'required',
                'estado_id'                         => 'required',
                'nivel_id'                          => 'required',
                'titulo'                            => 'required',
                'fecha_inicio'                      => 'required',
                'fecha_fin'                         => 'required',
                'provision_nacional'                => 'required',
                'registro_profesional'              => 'required',
            ],
            [
                'persona_id.required'               => 'El campo persona id es requerido',
                'pais_id.required'                  => 'El campo pais id es requerido',
                'ciudad_id.required'                => 'El campo ciudad id es requerido',
                'institucion_id.required'           => 'El campo institucion id es requerido',
                'estado_id.required'                => 'El campo estado id es requerido',
                'nivel_id.required'                 => 'El campo nivel id es requerido',
                'titulo.required'                   => 'El campo titulo es requerido',
                'fecha_inicio.required'             => 'El campo fecha de inicio es requerido',
                'fecha_fin.required'                => 'El campo fecha de finalizacion es requerido',
                'provision_nacional.required'       => 'El campo provision nacional es requerido',
                'registro_profesional.required'     => 'El campo registro profesional es requerido',

            ]
        );

        /*   if ($validator->fails()) {
            return response()->json([
                'status'    => false,
                'message'   => 'Error en validaciones ',
                'errors'    => $validator->errors()
            ], 200);
        }*/

        $formacion = new FormacionAcademica();
        $formacion->persona_id             = $request->persona_id;
        $formacion->pais_id                = $request->pais_id;
        $formacion->ciudad_id              = $request->ciudad_id;
        $formacion->institucion_id         = $request->institucion_id;
        $formacion->estado_id              = $request->estado_id;
        $formacion->nivel_id               = $request->nivel_id;
        $formacion->titulo                 = $request->titulo;
        $formacion->fecha_inicio           = $request->fecha_inicio;
        $formacion->fecha_fin              = $request->fecha_fin;
        $formacion->provision_nacional     = $request->provision_nacional;
        $formacion->registro_profesional   = $request->registro_profesional;

        $formacion->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamentee',
            'data'      => $formacion
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
        $formacion = FormacionAcademica::find($id);

        if (is_null($formacion)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $formacion
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
        $validator = Validator::make(
            $request->all(),
            [
                'persona_id'                        => 'required',
                'pais_id'                           => 'required',
                'ciudad_id'                         => 'required',
                'institucion_id'                    => 'required',
                'estado_id'                         => 'required',
                'nivel_id'                          => 'required',
                'titulo'                            => 'required',
                'fecha_inicio'                      => 'required',
                'fecha_fin'                         => 'required',
                'provision_nacional'                => 'required',
                'registro_profesional'              => 'required',
            ],
            [
                'persona_id.required'               => 'El campo persona id es requerido',
                'pais_id.required'                  => 'El campo pais id es requerido',
                'ciudad_id.required'                => 'El campo ciudad id es requerido',
                'institucion_id.required'           => 'El campo institucion id es requerido',
                'estado_id.required'                => 'El campo estado id es requerido',
                'nivel_id.required'                 => 'El campo nivel id es requerido',
                'titulo.required'                   => 'El campo titulo es requerido',
                'fecha_inicio.required'             => 'El campo fecha de inicio es requerido',
                'fecha_fin.required'                => 'El campo fecha de finalizacion es requerido',
                'provision_nacional.required'       => 'El campo provision nacional es requerido',
                'registro_profesional.required'     => 'El campo registro profesional es requerido',

            ]
        );

        /*   if ($validator->fails()) {
            return response()->json([
                'status'    => false,
                'message'   => 'Error en validaciones ',
                'errors'    => $validator->errors()
            ], 200);
        }*/

        $formacion = FormacionAcademica::find($id);

        if (is_null($formacion)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 200);
        }

        $formacion->persona_id            = $request->persona_id;
        $formacion->pais_id               = $request->pais_id;
        $formacion->ciudad_id             = $request->ciudad_id;
        $formacion->institucion_id        = $request->institucion_id;
        $formacion->estado_id             = $request->estado_id;
        $formacion->nivel_id              = $request->nivel_id;
        $formacion->titulo                = $request->titulo;
        $formacion->fecha_inicio          = $request->fecha_inicio;
        $formacion->fecha_fin             = $request->fecha_fin;
        $formacion->provision_nacional    = $request->provision_nacional;
        $formacion->registro_profesional  = $request->registro_profesional;
        $formacion->vigente               = $request->vigente;
        $formacion->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $formacion
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
        $formacion = FormacionAcademica::find($id);

        if (is_null($formacion)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud no encontrado'
            ], 200);
        }
        $formacion->delete();
        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud eliminado exitosamente',
            'data'      => $formacion
        ], 200);
    }

    public function formacionPersonaId($persona_id)
    {
        $formacion = FormacionAcademica::where('persona_id', $persona_id)->where('vigente', '=', 'true')->with('institucion', 'pais', 'ciudad', 'estado', 'nivelEstudio')->get();

        if (is_null($formacion)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }
        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $formacion
        ], 200);
    }

}
