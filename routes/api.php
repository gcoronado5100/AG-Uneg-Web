<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ConsejoController as ConsejoV1;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('v1/consejo', ConsejoV1::class)
      ->only(['index','show', 'destroy'])
      ->middleware('auth:sanctum');
/*
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);
Route::post('/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
});
*/

    Route::group([

        'middleware' => 'api',
        'prefix' => 'auth'

    ], function ($router) {

        Route::post('register', 'App\Http\Controllers\Api\AuthController@register');
        Route::post('login', 'App\Http\Controllers\Api\AuthController@login');
        Route::post('logout', 'App\Http\Controllers\Api\AuthController@logout');
        Route::post('refresh', 'App\Http\Controllers\Api\AuthController@refresh');
        Route::post('me', 'App\Http\Controllers\Api\AuthController@me');

    });
