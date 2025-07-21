<?php

namespace Database\Factories;

use App\Models\Fare;
use App\Models\Flight;
use App\Models\Booking;
use App\Models\Passenger;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $booking = Booking::inRandomOrder()->first();
        $passenger = Passenger::inRandomOrder()->first();
        $flight = Flight::inRandomOrder()->first();
        $fare = Fare::inRandomOrder()->first();

        return [
            'booking_id' => $booking->id,
            'passenger_id' => $passenger->id,
            'flight_id' => $flight->id,
            'fare_id' => $fare->id,
            'seat_number' => fake()->unique()->numberBetween(1,60) . fake()->randomElement(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K']),
            'date' => fake()->dateTimeThisYear()->format('Y.m.d h:m'),
        ];
    }
}
