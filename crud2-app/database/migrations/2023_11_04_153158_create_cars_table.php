<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //create new db table called 'cars'
        //blueprint: object to specify structure of table 
        Schema::create('cars', function (Blueprint $table) {
            //$ is use to declare variables in PHP
            //in Laravel, the $ is for accessing properties or methods of objects 
            //PHP is dynamically typed, but Laravel DB need data types for schemas
            $table->id();
            $table->timestamps();
            $table->string('car_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
