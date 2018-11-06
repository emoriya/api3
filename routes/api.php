<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
    return response()->json(['message' => 'Teste API', 'status' => 'Connected']);;
});

Route::resource('cidades', 'CidadesController');
Route::resource('roles', 'RolesController');
Route::resource('usuarios', 'UsuariosController');


Route::get('/', function () {
    return redirect('api');
});