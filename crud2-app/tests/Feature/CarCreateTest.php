<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Car;

class CarCreateTest extends TestCase
{
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
}

