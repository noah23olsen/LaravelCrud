<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function addCar(){
        $car = new Car(); //create new instance of Car object
        $car->car_name = 'Cybertruck'; //set name attribute of the object
        //save() INSERT, update() UPDATE, delete() DELETE
        $car->save(); //INSERT the car object to the database(triggers SQL insert)

        return 'Car added successfully!';
    }
}
