<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProjectsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "api" middleware group. Enjoy building your API!
|
*/

// API routes for cars
Route::apiResource('cars', CarsController::class);

// API routes for projects
Route::apiResource('projects', ProjectsController::class);

// API routes for services
Route::apiResource('services', ServicesController::class);

// Example of an existing route
Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
