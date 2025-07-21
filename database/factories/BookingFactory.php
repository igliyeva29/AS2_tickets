<?php

namespace Database\Factories;

use App\Models\Passenger;
use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $passenger = Passenger::inRandomOrder()->first();
        $flight = Flight::inRandomOrder()->first();

        return [
            'passenger_id' => $passenger->id,
            'flight_id' => $flight->id,
        ];
    }
}
