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
use Illuminate\Support\Facades\Storage;

//-------------------------------

//MODELOS
Route::apiResource('/consejos', ConsejoController::class)->middleware('auth:api');
Route::apiResource('/consejo_punto', ConsejoPuntoController::class)->middleware('aauth:api');

Route::apiResource('/estados', EstadoController::class)->middleware('auth:api');
Route::apiResource('/puntos', PuntoController::class)->middleware('auth:api');
Route::apiResource('/soportes', SoporteController::class)->middleware('auth:api');


//Parte israel 
Route::apiResource('/agendas', AgendaController::class)->middleware('auth:api');
Route::apiResource('/consejo-role-user', ConsejoRoleUserController::class)->middleware('auth:api');
Route::apiResource('/users', UserController::class)->middleware('auth:api');

Route::group(['prefix' => 'auth'], function ($router) {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});

//Fin Parte israel 

Route::get('prueba', function () {
    return Storage::url('app/public/perfile/19804364.jpg');
});
