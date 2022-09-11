<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ConsejoController;
use App\Http\Controllers\ConsejoPuntoController;

use App\Http\Controllers\EstadoController;
use App\Http\Controllers\PuntoController;
use App\Http\Controllers\SoporteController;
use App\Http\Controllers\UserController;

//--------------------Debug se puede eliminar
use App\Models\Role;
use App\Models\Permiso;

use App\Http\Controllers\ConsejoRoleUserController;

//-------------------------------

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });

    //MODELOS
    Route::apiResource('/agenda', AgendaController::class)->middleware('auth:sanctum');
    Route::apiResource('/consejo', ConsejoController::class)->middleware('auth:sanctum');
    Route::apiResource('/consejo_punto', ConsejoPuntoController::class)->middleware('auth:sanctum');
    
    Route::apiResource('/estado', EstadoController::class)->middleware('auth:sanctum');
    Route::apiResource('/punto', PuntoController::class)->middleware('auth:sanctum');
    Route::apiResource('/soporte', SoporteController::class)->middleware('auth:sanctum');
    Route::apiResource('/user', UserController::class)->middleware('auth:sanctum');
   
    Route::apiResource('/consejo-role-user', ConsejoRoleUserController::class)->middleware('api');

    //AUTH
    Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
        Route::post('register', [AuthController::class, 'register']);
        Route::post('login', [AuthController::class, 'login']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    });

    Route::get('agregar', function (Request $request) {


        return (Role::all()::with('permisos'))->permisos()->orderBy('nombre')->get();

    });