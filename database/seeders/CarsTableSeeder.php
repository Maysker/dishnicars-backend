<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car; // Make sure you are using the correct namespace for your model
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear the table
        DB::table('cars')->delete();

        // Path to the JSON file, make sure you have specified the correct path to the file
        $json = File::get("D:\\GH\\dishnicars\\cars.json");
        $cars = json_decode($json);

        foreach ($cars as $key => $car) {
            Car::create([
                'make' => $car->make,
                'model' => $car->model,
                'year' => $car->year,
                'mileage' => $car->mileage,
                'fuel_type' => $car->fuelType,
                'transmission' => $car->transmission,
                'price' => $car->price,
                'images' => json_encode($car->images), // Convert array of images to JSON
                'description' => $car->description
            ]);
        }
    }
}
