<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ProjectsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

// For Cars
Route::get('/cars', [CarsController::class, 'index'])->name('cars.index');
Route::get('/cars/create', [CarsController::class, 'create'])->name('cars.create');
Route::post('/cars', [CarsController::class, 'store'])->name('cars.store');
Route::get('/cars/{id}', [CarsController::class, 'show'])->name('cars.show');
Route::get('/cars/{id}/edit', [CarsController::class, 'edit'])->name('cars.edit');
Route::put('/cars/{id}', [CarsController::class, 'update'])->name('cars.update');
Route::delete('/cars/{id}', [CarsController::class, 'destroy'])->name('cars.destroy');

// For Projects
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectsController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectsController::class, 'store'])->name('projects.store');
Route::get('/projects/{id}', [ProjectsController::class, 'show'])->name('projects.show');
Route::get('/projects/{id}/edit', [ProjectsController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{id}', [ProjectsController::class, 'update'])->name('projects.update');
Route::delete('/projects/{id}', [ProjectsController::class, 'destroy'])->name('projects.destroy');

// For Services
Route::resource('services', ServicesController::class);

require __DIR__.'/auth.php';
