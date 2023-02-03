<?php

namespace App\Http\Controllers\Api\Rh\Trn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rh\Trn\Persona;
use Illuminate\Support\Facades\Validator;

class PersonaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->only('index');
        $this->middleware('auth:sanctum')->only('store');
        $this->middleware('auth:sanctum')->only('show');
        $this->middleware('auth:sanctum')->only('update');
        $this->middleware('auth:sanctum')->only('destroy');

        $this->middleware('auth:sanctum')->only('datosRegistrados');
        $this->middleware('auth:sanctum')->only('revisadoAdmin');
        $this->middleware('auth:sanctum')->only('personaUsuarioId');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::where('identificador_dato_laboral', '=', 'false')->get();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro de personas recuperadas exitosamente',
            'data'      => $personas
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
                'estado_civil_id'                   => 'required',
                'genero_id'                         => 'required',
                'pais_id'                           => 'required',
                'ciudad_id'                         => 'required',
                'expedido_ci_id'                    => 'required',
                'apellido_paterno'                  => 'required',
                'apellido_materno'                  => 'required',
                'nombres'                           => 'required',
                'cedula_identidad'                  => 'required',
                'complemento_ci'                    => 'required',
                'fecha_nacimiento'                  => 'required',
                'telefono_fijo'                     => 'required',
                'telefono_movil'                    => 'required',
                'correo_personal'                   => 'required',
                'nro_nua_afp'                       => 'required',
                'nombre_afp'                        => 'required',
                'nro_libreta_militar'               => 'required',
                'grupo_sanguineo'                   => 'required',
                'nro_nit'                           => 'required',
                'nombre_seguro_medico'              => 'required',
                'nro_seguro_medico'                 => 'required',
                'licencia_conducir'                 => 'required',
                'licencia_categoria'                => 'required',
                'domicilio'                         => 'required',
            ],
            [
                'estado_civil_id.required'          => 'El campo Estado Civil es requerido',
                'genero_id.required'                => 'El campo Genero es requerido',
                'pais_id.required'                  => 'El campo Pais es requerido',
                'ciudad_id.required'                => 'El campo Ciudad es requerido',
                'expedido_ci_id.required'           => 'El campo Expedido es requerido',
                'apellido_paterno.required'         => 'El campo Apellido Paterno es requerido',
                'apellido_materno.required'         => 'El campo Apellido Materno es requerido',
                'nombres.required'                  => 'El campo Nombres es requerido',
                'cedula_identidad.required'         => 'El campo Cedula de Identidad es requerido',
                'complemento_ci.required'           => 'El campo Complemento de Carnet de Identidad es requerido',
                'fecha_nacimiento.required'         => 'El campo Fecha de Nacimiento es requerido',
                'telefono_fijo.required'            => 'El campo Telefono Fijo es requerido',
                'telefono_movil.required'           => 'El campo Telefono Movil es requerido',
                'correo_personal.required'          => 'El campo Correo Personal es requerido',
                'nro_nua_afp.required'              => 'El campo Numero NUA AFP es requerido',
                'nombre_afp.required'               => 'El campo Nombre de la AFP es requerido',
                'nro_libreta_militar.required'      => 'El campo Nro. de Libreta Militar es requerido',
                'grupo_sanguineo.required'          => 'El campo Grupo Sanguineo es requerido',
                'nro_nit.required'                  => 'El campo Nro de Nit es requerido',
                'nombre_seguro_medico.required'     => 'El campo Nombre de Seguro Medico es requerido',
                'nro_seguro_medico.required'        => 'El campo Nro. Seguro Medico es requerido',
                'nro_libreta_militar.required'      => 'El campo Nro. de Libreta Militar es requerido',
                'licencia_conducir.required'        => 'El campo Licencia de Condumcir es requerido',
                'licencia_categoria.required'       => 'El campo Licencia Categoria es requerido',
                'domicilio.required'                => 'El campo Domicilio es requerido',

            ]
        );

        /*   if ($validator->fails()) {
            return response()->json([
                'status'    => false,
                'message'   => 'Error en validaciones ',
                'errors'    => $validator->errors()
            ], 200);
        }*/

        $persona = new Persona();
        $persona->user_id             = $request->user_id;
        $persona->estado_civil_id     = $request->estado_civil_id;
        $persona->genero_id           = $request->genero_id;
        $persona->pais_id             = $request->pais_id;
        $persona->ciudad_id           = $request->ciudad_id;
        $persona->expedido_ci_id      = $request->expedido_ci_id;
        $persona->apellido_paterno    = $request->apellido_paterno;
        $persona->apellido_materno    = $request->apellido_materno;
        $persona->nombres             = $request->nombres;
        $persona->cedula_identidad    = $request->cedula_identidad;
        $persona->complemento_ci      = $request->complemento_ci;
        $persona->fecha_nacimiento    = $request->fecha_nacimiento;
        $persona->telefono_fijo       = $request->telefono_fijo;
        $persona->telefono_movil      = $request->telefono_movil;
        $persona->correo_personal     = $request->correo_personal;
        $persona->nro_nua_afp         = $request->nro_nua_afp;
        $persona->nombre_afp          = $request->nombre_afp;
        $persona->nro_libreta_militar = $request->nro_libreta_militar;
        $persona->grupo_sanguineo     = $request->grupo_sanguineo;
        $persona->nro_nit             = $request->nro_nit;
        $persona->nombre_seguro_medico = $request->nombre_seguro_medico;
        $persona->nro_seguro_medico   = $request->nro_seguro_medico;
        $persona->licencia_conducir   = $request->licencia_conducir;
        $persona->licencia_categoria  = $request->licencia_categoria;
        $persona->domicilio           = $request->domicilio;
        $persona->identificador_dato_laboral  = $request->identificador_dato_laboral;
        $persona->estado_finalizacion = $request->estado_finalizacion;

        $persona->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $persona
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
        $persona = Persona::find($id);

        if (is_null($persona)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $persona
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
                'estado_civil_id'                   => 'required',
                'genero_id'                         => 'required',
                'pais_id'                           => 'required',
                'ciudad_id'                         => 'required',
                'expedido_ci_id'                    => 'required',
                'apellido_paterno'                  => 'required',
                'apellido_materno'                  => 'required',
                'nombres'                           => 'required',
                'cedula_identidad'                  => 'required',
                'complemento_ci'                    => 'required',
                'fecha_nacimiento'                  => 'required',
                'telefono_fijo'                     => 'required',
                'telefono_movil'                    => 'required',
                'correo_personal'                   => 'required',
                'nro_nua_afp'                       => 'required',
                'nombre_afp'                        => 'required',
                'nro_libreta_militar'               => 'required',
                'grupo_sanguineo'                   => 'required',
                'nro_nit'                           => 'required',
                'nombre_seguro_medico'              => 'required',
                'nro_seguro_medico'                 => 'required',
                'licencia_conducir'                 => 'required',
                'licencia_categoria'                => 'required',
                'domicilio'                         => 'required',
            ],
            [
                'estado_civil_id.required'          => 'El campo Estado Civil es requerido',
                'genero_id.required'                => 'El campo Genero es requerido',
                'pais_id.required'                  => 'El campo Pais es requerido',
                'ciudad_id.required'                => 'El campo Ciudad es requerido',
                'expedido_ci_id.required'           => 'El campo Expedido es requerido',
                'apellido_paterno.required'         => 'El campo Apellido Paterno es requerido',
                'apellido_materno.required'         => 'El campo Apellido Materno es requerido',
                'nombres.required'                  => 'El campo Nombres es requerido',
                'cedula_identidad.required'         => 'El campo Cedula de Identidad es requerido',
                'complemento_ci.required'           => 'El campo Complemento de Carnet de Identidad es requerido',
                'fecha_nacimiento.required'         => 'El campo Fecha de Nacimiento es requerido',
                'telefono_fijo.required'            => 'El campo Telefono Fijo es requerido',
                'telefono_movil.required'           => 'El campo Telefono Movil es requerido',
                'correo_personal.required'          => 'El campo Correo Personal es requerido',
                'nro_nua_afp.required'              => 'El campo Numero NUA AFP es requerido',
                'nombre_afp.required'               => 'El campo Nombre de la AFP es requerido',
                'nro_libreta_militar.required'      => 'El campo Nro. de Libreta Militar es requerido',
                'grupo_sanguineo.required'          => 'El campo Grupo Sanguineo es requerido',
                'nro_nit.required'                  => 'El campo Nro de Nit es requerido',
                'nombre_seguro_medico.required'     => 'El campo Nombre de Seguro Medico es requerido',
                'nro_seguro_medico.required'        => 'El campo Nro. Seguro Medico es requerido',
                'nro_libreta_militar.required'      => 'El campo Nro. de Libreta Militar es requerido',
                'licencia_conducir.required'        => 'El campo Licencia de Condumcir es requerido',
                'licencia_categoria.required'       => 'El campo Licencia Categoria es requerido',
                'domicilio.required'                => 'El campo Domicilio es requerido',

            ]
        );

        /* if ($validator->fails()) {
            return response()->json([
                'status'    => false,
                'message'   => 'Error en validaciones ',
                'errors'    => $validator->errors()
            ], 200);
        }*/

        $persona = Persona::find($id);

        if (is_null($persona)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 200);
        }

        $persona->user_id             = $request->user_id;
        $persona->estado_civil_id     = $request->estado_civil_id;
        $persona->genero_id           = $request->genero_id;
        $persona->pais_id             = $request->pais_id;
        $persona->ciudad_id           = $request->ciudad_id;
        $persona->expedido_ci_id      = $request->expedido_ci_id;
        $persona->apellido_paterno    = $request->apellido_paterno;
        $persona->apellido_materno    = $request->apellido_materno;
        $persona->nombres             = $request->nombres;
        $persona->cedula_identidad    = $request->cedula_identidad;
        $persona->complemento_ci      = $request->complemento_ci;
        $persona->fecha_nacimiento    = $request->fecha_nacimiento;
        $persona->telefono_fijo       = $request->telefono_fijo;
        $persona->telefono_movil      = $request->telefono_movil;
        $persona->correo_personal     = $request->correo_personal;
        $persona->nro_nua_afp         = $request->nro_nua_afp;
        $persona->nombre_afp          = $request->nombre_afp;
        $persona->nro_libreta_militar = $request->nro_libreta_militar;
        $persona->grupo_sanguineo     = $request->grupo_sanguineo;
        $persona->nro_nit             = $request->nro_nit;
        $persona->nombre_seguro_medico = $request->nombre_seguro_medico;
        $persona->nro_seguro_medico   = $request->nro_seguro_medico;
        $persona->licencia_conducir   = $request->licencia_conducir;
        $persona->licencia_categoria  = $request->licencia_categoria;
        $persona->domicilio           = $request->domicilio;
        $persona->estado_finalizacion = $request->estado_finalizacion;

        $persona->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de actualizado exitosamente',
            'data'      => $persona
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
        $persona = Persona::find($id);

        if (is_null($persona)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud no encontrado'
            ], 200);
        }
        $persona->delete();
        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud eliminado exitosamente',
            'data'      => $persona
        ], 200);
    }

    public function datosRegistrados($estFin)
    {
        if ($estFin == 1) {
            $personas = Persona::where('identificador_dato_laboral', '=', 'false')
                ->where('estado_finalizacion', '=', $estFin)->get();

            return response()->json([
                'status'    => true,
                'message'   => 'Registros guardados',
                'data'      => $personas
            ], 200);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 200);
        }
    }

    public function revisadoAdmin($estFin)
    {
        if ($estFin == 2) {
            $personas = Persona::where('identificador_dato_laboral', '=', 'false')
                ->where('estado_finalizacion', '=', $estFin)->get();

            return response()->json([
                'status'    => true,
                'message'   => 'Registros verificados por el encargado',
                'data'      => $personas
            ], 200);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 200);
        }
    }
    public function personaUsuarioId($user_id)
    {
        $usuarioPregistrado = Persona::where('user_id', $user_id)->with('usuario')->first();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro de persona preregistrada, recuperada exitosamente',
            'data'      => $usuarioPregistrado
        ], 200);
    }

}
