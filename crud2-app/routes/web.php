<?php
//php artisan serve - runs code locally
//artisan is a CLI for Laravel

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController; //imports CarController

Route::get('/', function () {
    return view('welcome');
});
//get request at the class CarController, method addCar
Route::post('/addCar',[CarController::class,'addCar'] );
Route::get('/cars',[CarController::class,'getAllCars']);
//note {id} parameter in UR
Route::get('/cars/{id}',[CarController::class,'getCarById']);

// Route::ge