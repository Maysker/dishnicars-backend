<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarsController extends Controller
{
    /**
     * Display a listing of the cars.
     */
    public function index()
    {
        $cars = Car::all();
        return response()->json($cars, Response::HTTP_OK);
    }

    /**
     * Store a newly created car in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'mileage' => 'required|string',
            'fuel_type' => 'required|string',
            'transmission' => 'required|string',
            'price' => 'required|string',
            'images' => 'required|json',
            'description' => 'nullable|string',
        ]);

        $car = Car::create($validatedData);
        return response()->json($car, Response::HTTP_CREATED);
    }

    /**
     * Display the specified car.
     */
    public function show($id)
    {
        $car = Car::find($id);
        
        if (!$car) {
            return response()->json(['message' => 'Car not found'], Response::HTTP_NOT_FOUND);
        }

        return response()->json($car, Response::HTTP_OK);
    }

    /**
     * Update the specified car in storage.
     */
    public function update(Request $request, $id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json(['message' => 'Car not found'], Response::HTTP_NOT_FOUND);
        }

        $validatedData = $request->validate([
            'make' => 'sometimes|required|string|max:255',
            'model' => 'sometimes|required|string|max:255',
            'year' => 'sometimes|required|integer',
            'mileage' => 'sometimes|required|string',
            'fuel_type' => 'sometimes|required|string',
            'transmission' => 'sometimes|required|string',
            'price' => 'sometimes|required|string',
            'images' => 'sometimes|required|json',
            'description' => 'nullable|string',
        ]);

        $car->update($validatedData);
        return response()->json($car, Response::HTTP_OK);
    }

    /**
     * Remove the specified car from storage.
     */
    public function destroy($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json(['message' => 'Car not found'], Response::HTTP_NOT_FOUND);
        }

        $car->delete();
        return response()->json(['message' => 'Car deleted successfully'], Response::HTTP_OK);
    }
}
