<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\CompaniesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function() {
    return response()->json(['message'=> 'Jobs API', 'status' => 'Connected']);
});

Route::controller(JobsController::class)->group(function () {
    Route::get('jobs', 'index');
    Route::get('show_job/{id}', 'show');
    Route::post('store_job', 'store');
    Route::put('update_job/{id}', 'update');
    Route::delete('delete_job/{id}', 'destroy');

});

Route::controller(CompaniesController::class)->group(function () {
    Route::get('companies', 'index');
    Route::get('show_company/{id}', 'show');
    Route::post('store_company', 'store');
    Route::put('update_company/{id}', 'update');
    Route::delete('delete_company/{id}', 'destroy');
});



// Route::resource('jobs', JobsController::class);
// Route::resource('companies', CompaniesController::class);
