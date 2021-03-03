<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Ruta del api para obtener todas las categorias:
Route::get('categoria', 'App\Http\Controllers\CategoriaController@getCategoria');

//Ruta del api para obtener una categoria por su id:
Route::get('categoria/{id}', 'App\Http\Controllers\CategoriaController@getCategoriaById');

//Ruta del api para hacer un post o registro de una categoria:
Route::post('addCategoria', 'App\Http\Controllers\CategoriaController@insertCategoria');

//Ruta del api para hacer un put o modificar una categoria:
Route::put('updateCategoria/{id}', 'App\Http\Controllers\CategoriaController@updateCategoria');

//Ruta del api para hacer un delete o eliminar una categoria:
Route::delete('deleteCategoria/{id}','App\Http\Controllers\CategoriaController@deleteCategoria');
