<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function addCar(Request $request){
        $data = $request->json()->all();

        $car = new Car(); //create new instance of Car object
        $car->car_name = $data['car_name']; //set name attribute of the object
        //save() INSERT, update() UPDATE, delete() DELETE
        $car->save(); //INSERT the car object to the database(triggers SQL insert)

        return 'Car added successfully!';
    }
    public function getAllCars(){
        $cars = Car::all();
        //array to hold response data
        $response = [
            // "=>" defines key-value pairs in an array [key => value]
            'cars' => $cars
        ];
        //converts response array into JSON format
        // "->" accesses methods and porperties of objects
        //Spring Boot would handle this JSON serialization directly, PHP requires it explicitly
        return response()->json($response);
    }
    public function getCarById($id){
        $car = Car::find($id);

        if($car){
            return response()->json(['car'=>$car]);
        }
        else {
            // "repsonseMessage" is a hard coded variable
            //the 404 is also hard coded(but makes sense in this scenario)
            return response()->json(['responseMessage'=>'Car not found'],404);
        }
    }
    // public function 
}
