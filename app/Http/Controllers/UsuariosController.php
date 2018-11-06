<?php

namespace App\Http\Controllers;

use App\Role;
use App\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usarios = Usuario::all();
        return response()->json($usarios);
    }

    public function show($id) {
        $usuario = Usuario::find($id);

        if(!$usuario) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($usuario);
    }

    public function store(Request $request) {

        $usuario = new Usuario();
        $usuario->fill($request->all());
        $usuario->save();

        $role = Role::find([ 1 , 2 ]);
        $usuario->roles()->attach($role);
        return response()->json($usuario, 201);
    }

    public function update(Request $request, $id) {
        $usuario = Usuario::find($id);

        if(!$usuario) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $usuario->fill($request->all());
        $usuario->save();

        return response()->json($usuario);
    }

    public function destroy($id) {
        $usuario = Usuario::find($id);

        if(!$usuario) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $usuario->delete();
    }
}
