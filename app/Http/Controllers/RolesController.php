<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return response()->json($roles);
    }

    public function show($id) {
        $role = Role::find($id);

        if(!$role) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($role);
    }
}
