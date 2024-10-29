<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

// Route for login
Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    // Create a token for the user
    $token = $user->createToken('auth-token')->plainTextToken;

    return response()->json(['token' => $token], 200);
});

// Protected routes for cars, projects, and services
Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('cars', CarsController::class);
    Route::apiResource('projects', ProjectsController::class);
    Route::apiResource('services', ServicesController::class);
});

// Example route for the current user
Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
