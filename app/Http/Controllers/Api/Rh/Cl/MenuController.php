<?php

namespace App\Http\Controllers\Api\Rh\Cl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rh\Cl\Menu;

class MenuController extends Controller
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
        $menus = Menu::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de menus recuperados exitosamente',
            'data'      => $menus
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
        $menu = new Menu();
        $menu->nombre             = $request->nombre;
        $menu->vigente            = $request->vigente;
        $menu->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $menu
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
        $menu = Menu::find($id);

        if (is_null($menu)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $menu
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
        $menu = Menu::find($id);

        if (is_null($menu)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 200);
        }

        $menu->nombre             = $request->nombre;
        $menu->vigente            = $request->vigente;
        $menu->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $menu
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
        $menu = Menu::find($id);

        if (is_null($menu)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud no encontrado'
            ], 200);
        }
        $menu->delete();
        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud eliminado exitosamente',
            'data'      => $menu
        ], 200);
    }
}
