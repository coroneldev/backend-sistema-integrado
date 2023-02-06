<?php

namespace App\Http\Controllers\Api\Rh\Trn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rh\Trn\Idioma;
use Illuminate\Support\Facades\Validator;

class IdiomasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idiomasPersonas = Idioma::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de conocimiento de idiomas recuperados exitosamente',
            'data'      => $idiomasPersonas
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
                'idioma_id'                         => 'required',
                'estado_id'                         => 'required',
                'nivel_conocimiento_id'             => 'required',

            ],
            [
                'persona_id.required'               => 'El campo persona id es requerido',
                'idioma_id.required'                => 'El campo parentesco id es requerido',
                'estado_id.required'                => 'El campo expedido ci es requerido',
                'nivel_conocimiento_id.required'    => 'El campo nombre es requerido',

            ]
        );

        /*   if ($validator->fails()) {
            return response()->json([
                'status'    => false,
                'message'   => 'Error en validaciones ',
                'errors'    => $validator->errors()
            ], 200);
        }*/

        $idiomaPersona = new Idioma();
        $idiomaPersona->persona_id                    = $request->persona_id;
        $idiomaPersona->idioma_id                     = $request->idioma_id;
        $idiomaPersona->estado_id                     = $request->estado_id;
        $idiomaPersona->nivel_conocimiento_id         = $request->nivel_conocimiento_id;
        $idiomaPersona->vigente                       = $request->vigente;
        $idiomaPersona->save();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $idiomaPersona
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
        $idiomaPersona = Idioma::find($id);

        if (is_null($idiomaPersona)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $idiomaPersona
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
                'idioma_id'                         => 'required',
                'estado_id'                         => 'required',
                'nivel_conocimiento_id'             => 'required',

            ],
            [
                'persona_id.required'               => 'El campo persona id es requerido',
                'idioma_id.required'                => 'El campo parentesco id es requerido',
                'estado_id.required'                => 'El campo expedido ci es requerido',
                'nivel_conocimiento_id.required'    => 'El campo nombre es requerido',

            ]
        );

        /*   if ($validator->fails()) {
            return response()->json([
                'status'    => false,
                'message'   => 'Error en validaciones ',
                'errors'    => $validator->errors()
            ], 200);
        }*/
        $idiomaPersona = Idioma::find($id);

        if (is_null($idiomaPersona)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 200);
        }
        $idiomaPersona->persona_id                    = $request->persona_id;
        $idiomaPersona->idioma_id                     = $request->idioma_id;
        $idiomaPersona->estado_id                     = $request->estado_id;
        $idiomaPersona->nivel_conocimiento_id         = $request->nivel_conocimiento_id;
        $idiomaPersona->vigente                       = $request->vigente;
        $idiomaPersona->save();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $idiomaPersona
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
        $idiomaPersona = Idioma::find($id);

        if (is_null($idiomaPersona)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud no encontrado'
            ], 200);
        }
        $idiomaPersona->delete();
        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud eliminado exitosamente',
            'data'      => $idiomaPersona
        ], 200);
    }

    public function idiomaPersonaId($persona_id)
    {
        $idiomaPersona = Idioma::where('persona_id', $persona_id)->with('persona', 'idioma', 'estado', 'nivelConocimiento')->get();

        if (is_null($idiomaPersona)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }
        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $idiomaPersona
        ], 200);
    }
}
