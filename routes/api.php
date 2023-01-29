<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Api routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your Api!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//States-Cities
Route::get('states', [\App\Http\Controllers\Api\CitiesController::class, 'states'])->name('api.states');
Route::get('cities/{state_id}', [\App\Http\Controllers\Api\CitiesController::class, 'cities'])->name('api.cities');
