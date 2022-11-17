<?php

use App\Http\Controllers\ClinicalHistoryController;
use App\Http\Controllers\ClinicalHistoryVeterinaryController;
use App\Http\Controllers\DiagnosticController;
use App\Http\Controllers\PetOwnerController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\VeterinaryController;
use App\Models\PetOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(ClinicalHistoryController::class)->group(function () {
    Route::get('clinicalhistory','index'); //Para obtener todos
    Route::get('clinicalhistory/{id}', 'show'); //Para consultar especifico
    Route::post('clinicalhistory', 'store'); //Para guardar
    Route::put('clinicalhistory/{id}', 'update'); //Para actualizar
   // Route::delete('clinicalhistory/{id}', 'destroy'); //Para eliminar un registro
});

Route::controller(ClinicalHistoryVeterinaryController::class)->group(function () {
    Route::get('clinicalhistoryVeterinary','index'); //Para obtener todos
    Route::get('clinicalhistoryVeterinary/{id}', 'show'); //Para consultar especifico
    Route::post('clinicalhistoryVeterinary', 'store'); //Para guardar
    Route::put('clinicalhistoryVeterinary/{id}', 'update'); //Para actualizar
    Route::delete('clinicalhistoryVeterinary/{id}', 'destroy'); //Para eliminar un registro
});

Route::controller(DiagnosticController::class)->group(function () {
    Route::get('diagnostic','index'); //Para obtener todos
    Route::get('diagnostic/{id}', 'show'); //Para consultar especifico
    Route::post('diagnostic', 'store'); //Para guardar
    Route::put('diagnostic/{id}', 'update'); //Para actualizar
    Route::delete('diagnostic/{id}', 'destroy'); //Para eliminar un registro
});

Route::controller(PetOwnerController::class)->group(function () {
    Route::get('petOwner','index'); //Para obtener todos
    Route::get('petOwner/{id}', 'show'); //Para consultar especifico
    Route::post('petOwner', 'store'); //Para guardar
    Route::put('petOwner/{id}', 'update'); //Para actualizar
    Route::delete('petOwner/{id}', 'destroy'); //Para eliminar un registro
});

Route::controller(PetsController::class)->group(function () {
    Route::get('pet','index'); //Para obtener todos
    Route::get('pet/{id}', 'show'); //Para consultar especifico
    Route::post('pet', 'store'); //Para guardar
    Route::put('pet/{id}', 'update'); //Para actualizar
    Route::delete('pet/{id}', 'destroy'); //Para eliminar un registro
});

Route::controller(VeterinaryController::class)->group(function () {
    Route::get('veterinary','index'); //Para obtener todos
    Route::get('veterinary/{id}', 'show'); //Para consultar especifico
    Route::post('veterinary', 'store'); //Para guardar
    Route::put('veterinary/{id}', 'update'); //Para actualizar
    Route::delete('veterinary/{id}', 'destroy'); //Para eliminar un registro
});
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
