<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamaController;

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

Route::get('nama',[NamaController::class,'index']);
Route::post('nama',[NamaController::class,'store']);
Route::put('/nama/{id}',[NamaController::class,'update']);
Route::delete('/nama/{id}',[NamaController::class,'destroy']);
