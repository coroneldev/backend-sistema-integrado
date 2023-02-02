<?php

namespace App\Http\Controllers\Api\Rh\Trn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rh\Trn\Parentesco;
use Illuminate\Support\Facades\Validator;

class ParentescosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->only('index');
        $this->middleware('auth:sanctum')->only('store');
        $this->middleware('auth:sanctum')->only('show');
        $this->middleware('auth:sanctum')->only('update');
        $this->middleware('auth:sanctum')->only('destroy');

         $this->middleware('auth:sanctum')->only('parentescoPersonaId');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parentescos = Parentesco::all();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro de personas recuperadas exitosamente',
            'data'      => $parentescos
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
                'parentesco_id'                     => 'required',
                'expedido_ci_id'                    => 'required',
                'nombres'                           => 'required',
                'apellidos'                         => 'required',
                'cedula_identidad'                  => 'required',
                'direccion_laboral'                 => 'required',
                'direccion_parentesco'              => 'required',
                'correo_personal'                   => 'required',
            ],
            [
                'persona_id.required'               => 'El campo persona id es requerido',
                'parentesco_id.required'            => 'El campo parentesco id es requerido',
                'expedido_ci_id.required'           => 'El campo expedido ci es requerido',
                'nombres.required'                  => 'El campo nombre es requerido',
                'apellidos.required'                => 'El campo apellido es requerido',
                'cedula_identidad.required'         => 'El campo cedula de identidad es requerido',
                'direccion_laboral.required'        => 'El campo direccion laboral es requerido',
                'direccion_parentesco.required'     => 'El campo direccion parentesco es requerido',
                'correo_personal.required'          => 'El campo correo personal es requerido',

            ]
        );

     /*   if ($validator->fails()) {
            return response()->json([
                'status'    => false,
                'message'   => 'Error en validaciones ',
                'errors'    => $validator->errors()
            ], 200);
        }*/


        $parentesco = new Parentesco();
        $parentesco->persona_id                  = $request->persona_id;
        $parentesco->parentesco_id               = $request->parentesco_id;
        $parentesco->expedido_ci_id              = $request->expedido_ci_id;
        $parentesco->nombres                     = $request->nombres;
        $parentesco->apellidos                   = $request->apellidos;
        $parentesco->cedula_identidad            = $request->cedula_identidad;
        $parentesco->direccion_laboral           = $request->direccion_laboral;
        $parentesco->direccion_parentesco        = $request->direccion_parentesco;
        $parentesco->correo_personal             = $request->correo_personal;
        $parentesco->telefono                    = $request->telefono;
        $parentesco->vigente                     = $request->vigente;
        $parentesco->save();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $parentesco
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
        $parentesco = Parentesco::find($id);

        if (is_null($parentesco)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $parentesco
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
                'parentesco_id'                     => 'required',
                'expedido_ci_id'                    => 'required',
                'nombres'                           => 'required',
                'apellidos'                         => 'required',
                'cedula_identidad'                  => 'required',
                'direccion_laboral'                 => 'required',
                'direccion_parentesco'              => 'required',
                'correo_personal'                   => 'required',
            ],
            [
                'persona_id.required'               => 'El campo persona id es requerido',
                'parentesco_id.required'            => 'El campo parentesco id es requerido',
                'expedido_ci_id.required'           => 'El campo expedido ci es requerido',
                'nombres.required'                  => 'El campo nombre es requerido',
                'apellidos.required'                => 'El campo apellido es requerido',
                'cedula_identidad.required'         => 'El campo cedula de identidad es requerido',
                'direccion_laboral.required'        => 'El campo direccion laboral es requerido',
                'direccion_parentesco.required'     => 'El campo direccion parentesco es requerido',
                'correo_personal.required'          => 'El campo correo personal es requerido',

            ]
        );

      /*  if ($validator->fails()) {
            return response()->json([
                'status'    => false,
                'message'   => 'Error en validaciones ',
                'errors'    => $validator->errors()
            ], 200);
        }*/


        $parentesco = Parentesco::find($id);

        if (is_null($parentesco)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 200);
        }

        $parentesco->persona_id                  = $request->persona_id;
        $parentesco->parentesco_id               = $request->parentesco_id;
        $parentesco->expedido_ci_id              = $request->expedido_ci_id;
        $parentesco->nombres                     = $request->nombres;
        $parentesco->apellidos                   = $request->apellidos;
        $parentesco->cedula_identidad            = $request->cedula_identidad;
        $parentesco->direccion_laboral           = $request->direccion_laboral;
        $parentesco->direccion_parentesco        = $request->direccion_parentesco;
        $parentesco->telefono                    = $request->telefono;
        $parentesco->vigente                     = $request->vigente;
        $parentesco->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $parentesco
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
         $parentesco = Parentesco::find($id);

        if (is_null($parentesco)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud no encontrado'
            ], 200);
        }
        $parentesco->delete();
        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud eliminado exitosamente',
            'data'      => $parentesco
        ], 200);
    }

    public function parentescoPersonaId($persona_id)
    {
        $parentetsco = Parentesco::where('persona_id', $persona_id)->with('persona', 'parentesco', 'expedido')->get();

        if (is_null($parentetsco)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }
        return response()->json([
            'status'    => true,
            'message'   => 'Registro de parentescos recuperados exitosamente',
            'data'      => $parentetsco
        ], 200);
    }
}
