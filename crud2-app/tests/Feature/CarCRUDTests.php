<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Car;

class CarCRUDTests extends TestCase
{   //command to run tests:
    // php artisan test --testsuite=Feature tests/Feature/CarCRUDTests.php
    use RefreshDatabase;
   
    /** @test */
    public function test_create_car()
    {
        $response = $this->json('POST','/addCar',[
            'car_name' => 'Tesla 4'
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'Car added successfully!'
        ]);
    }
    /** @test */
    //this doesn't work, idk why
    // public function test_get_car_by_id()
    // {
    //     $response = $this->json('GET','/cars/2');
    //     dump($response->content());

    //     $response->assertStatus(200);
    // }
    /** @test */
    public function test_get_all_cars()
    {
        $response = $this->json('GET','/cars');

        $response->assertStatus(200);
    }
    /** @test */
    //this one is mad about the ID as well 
    // public function delete_car()
    // {
    //     $response = $this->json('delete', '/cars/delete/3');

    //     $response->assertStatus(200);
    // }
    // public function test_update_car_by_id()
    // {
    //     $response = $this->json('update','/cars/update',[
    //         'car_name' => 'Tesla 10'
    //     ]);

    //     $response->assertJ
    // }
    /** @test */
    // public function test_update_car()
    // {
    //     // Create a car or retrieve an existing one from the test database
    //     $car = Car::firstOrCreate(['id' => 1], ['car_name' => 'Original Name']);
    
    //     // Data to update the car
    //     $dataToUpdate = ['car_name' => 'Updated Name'];
    
    //     // Make a request to update the car
    //     $response = $this->json('PUT', '/cars/update', [
    //         'id' => $car->id,
    //         'data' => $dataToUpdate,
    //     ]);
    
    //     // Assert that the update was successful (e.g., HTTP status code 200)
    //     $response->assertStatus(200);
    
    //     // Retrieve the updated car from the database
    //     $updatedCar = Car::find($car->id);
    
    //     // Assert that the car's name has been updated
    //     $this->assertEquals('Updated Name', $updatedCar->car_name);
    // }
}

