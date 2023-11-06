<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Car;

class CarModelTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $car = new Car();

        $car->car_name = "Toyota Corolla";

        $this->assertEquals('Toyota Corolla', $car->car_name);
    }
}
