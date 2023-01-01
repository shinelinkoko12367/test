<?php

use App\Http\Controllers\PatientController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(PatientController::class)->group(function(){
    Route::get('/patient','index');
    Route::get('/patient/{id}','show');
    Route::post('/patient','create');
    Route::put('/patient/{id}','update');
    Route::delete('/patient/{id}','destroy');
});