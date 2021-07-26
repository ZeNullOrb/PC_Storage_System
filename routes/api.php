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

Route::get('part', [\App\Http\Controllers\api\PartController::class,'index']);
Route::post('part', [\App\Http\Controllers\api\PartController::class,'store']);
Route::put('part/{id}', [\App\Http\Controllers\api\PartController::class,'update']);
Route::delete('part/{id}', [\App\Http\Controllers\api\PartController::class,'delete']);

Route::get('customer', [\App\Http\Controllers\api\CustomerController::class,'index']);
Route::post('customer', [\App\Http\Controllers\api\CustomerController::class,'store']);
Route::put('customer/{id}', [\App\Http\Controllers\api\CustomerController::class,'update']);
Route::delete('customer/{id}', [\App\Http\Controllers\api\CustomerController::class,'delete']);

Route::get('selle', [\App\Http\Controllers\api\selleController::class,'index']);
Route::post('selle', [\App\Http\Controllers\api\selleController::class,'store']);
Route::put('selle/{id}', [\App\Http\Controllers\api\selleController::class,'update']);
Route::delete('selle/{id}', [\App\Http\Controllers\api\selleController::class,'delete']);
