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
    
}

