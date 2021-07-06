<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VeiculosController;
use App\Http\Controllers\AuthController;
use Orion\Facades\Orion;

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

Route::group(['as' => 'api.', 'middleware' =>['auth:sanctum']], function() {
    Orion::resource('veiculos', VeiculosController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
});

/*Route::group(['as' => 'api.'], function() {
    Orion::resource('veiculos', VeiculosController::class);
});*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);