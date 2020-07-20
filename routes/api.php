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

Route::get ('/prueba_3', 'controlador@show_com_diagram');
Route::get ('/prueba_1', 'controlador@show_competences');
Route::get('/prueba_2','controlador@show_resource');
Route::get('/prueba','controlador@getDiagram');
Route::get('/prueba_4','controlador@show_challenge_diagram');
Route::post('/prueba','controlador@create' );
Route::post('/prueba_4','controlador@create_challenge_diagram' );


Route::post('/Github', 'controlador@putUrl');
