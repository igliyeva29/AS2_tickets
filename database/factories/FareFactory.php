<?php

namespace Database\Factories;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fare>
 */
class FareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $flight = Flight::inRandomOrder()->first();

        return [
            'flight_id' => $flight->id,
            'class_name' => fake()->randomElement(['Bussiness', 'Economy', 'First']),
            'price' => fake()->numberBetween(100, 1000),
            'currency' => fake()->currencyCode(),
            'available_seats' => fake()->numberBetween(1,300),
        ];
    }
}
