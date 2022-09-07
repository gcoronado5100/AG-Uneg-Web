<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ConsejoController;
use App\Http\Controllers\ConsejoPuntoController;
use App\Http\Controllers\ConsejoUsuarioController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\PuntoController;
use App\Http\Controllers\SoporteController;
use App\Http\Controllers\UserController;


    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });

    //MODELOS
    Route::apiResource('/agenda', AgendaController::class)->middleware('auth:sanctum');
    Route::apiResource('/consejo', ConsejoController::class)->middleware('auth:sanctum');
    Route::apiResource('/consejo_punto', ConsejoPuntoController::class)->middleware('auth:sanctum');
    Route::apiResource('/consejo_usuario', ConsejoUsuarioController::class)->middleware('auth:sanctum');
    Route::apiResource('/estado', EstadoController::class)->middleware('auth:sanctum');
    Route::apiResource('/punto', PuntoController::class)->middleware('auth:sanctum');
    Route::apiResource('/soporte', SoporteController::class)->middleware('auth:sanctum');
    Route::apiResource('/user', UserController::class)->middleware('auth:sanctum');

    //AUTH
    Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
        Route::post('register', 'App\Http\Controllers\AuthController@register');
        Route::post('login', 'App\Http\Controllers\AuthController@login');
        Route::post('logout', 'App\Http\Controllers\AuthController@logout');
        Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
        Route::post('me', 'App\Http\Controllers\AuthController@me');
    });
