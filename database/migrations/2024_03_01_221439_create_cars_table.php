<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->unsignedInteger('year');
            $table->string('mileage');
            $table->string('fuel_type');
            $table->string('transmission');
            $table->string('price');
            $table->json('images'); // Use text if your DBMS does not support JSON
            $table->text('description');
            $table->timestamps();
        });
    }
    
};
