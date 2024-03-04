<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'make', 'model', 'year', 'mileage', 'fuel_type', 'transmission', 'price', 'images', 'description'
    ];

    protected $casts = [
        'images' => 'array', // This is to work with the 'images' field as an array
    ];
}

