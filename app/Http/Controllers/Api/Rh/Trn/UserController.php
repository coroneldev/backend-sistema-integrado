<?php

namespace App\Http\Controllers\Api\Rh\Trn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->only('index');
        $this->middleware('auth:sanctum')->only('salir');
    }

    public function index()
    {
        $usuarios = User::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de usuarios recuperados exitosamente',
            'data'      => $usuarios
        ], 200);
    }

    public function registrar(Request $request)
    {
        $validar = $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required|string',
        ]);

        $usuario = new User($validar);

        $usuario->apellido_paterno        = $request->apellido_paterno;
        $usuario->apellido_materno        = $request->apellido_materno;
        $usuario->nombres                 = $request->nombres;
        $usuario->cedula_identidad        = $request->cedula_identidad;
        $usuario->email                   = $request->email;
        $usuario->password                = bcrypt($usuario->password);

        $usuario->save();

        return response()->json([
            'usuario' => $usuario,
        ], 200);
    }


    public function ingresar(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|exists:users',
            'password' => 'required',
        ]);

        $usuario = User::where('email', $fields['email'])->first();

        if (!Hash::check($fields['password'],  $usuario->password)) {
            return response()->json([
                'status'    => false,
                'message' => 'Credenciales incorrectas'
            ], 401);
        }

        return response()->json([
            'usuario' => $usuario,
            'token' => $usuario->CreateToken('appToken')->plainTextToken
        ], 200);
    }

    public function salir(Request $request)
    {
        $request->user()->CurrentAccessToken()->delete();

        return response()->json([
            'status'    => true,
            'message' => 'Se cerro el sistema correctamemnte  !!!'
        ], 200);
    }
}
