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

        return response()->json(['message'=>'Car added successfully!']);
    }

    public function updateCarById(Request $request){
        //this[request] would be entered on a form in the frontend
        $data = $request->json()->all();
        //extracts the id parameter from the request, and finds corresponding ID in db
        $car = Car::find($request->input('id'));
        if (!$car) {
            return response()->json(['message' => 'Car not found'], 404);
        }
        else {
            $car->car_name = $data['car_name'];
            $car->update();
            return response()->json(['message' => 'Car updated successfully'], 200);
        }
    }

    public function getAllCars(){
        $cars = Car::all();
        //array to hold response data
        $response = [
            // "=>" defines key-value pairs in an array [key => value]
            'cars' => $cars
        ];
        //converts response array into JSON format
        // "->" accesses methods and properties of objects
        //Spring Boot would handle this JSON serialization directly, PHP requires it explicitly
        return response()->json([$response,200]);
    }

    public function getCarById($id){
        $car = Car::find($id);

        if($car){
            return response()->json(['car'=>$car],200);
        }
        else {
            // "responseMessage" is a hard coded variable
            //the 404 is also hard coded(but makes sense in this scenario)
            return response()->json(['responseMessage'=>'Car not found'],404);
        }
    }

    public function deleteCarById($id){
        $car = Car::find($id);

        if($car){
            $car->delete();
            return response()->json(['message' => 'Car deleted successfully'], 200);
        }
        else {
            // "responseMessage" is a hard coded variable
            //the 404 is also hard coded(but makes sense in this scenario)
            return response()->json(['responseMessage'=>'Car not found'],404);
        }
    }
}
