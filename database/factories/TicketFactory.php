<?php

namespace Database\Factories;

use App\Models\Seat;
use App\Models\Booking;
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
        $seat = Seat::inRandomOrder()->first();

        return [
            'booking_id' => $booking->id,
            'seat_number' => $seat->seat_number,
            'date' => fake()->dateTimeThisYear()->format('Y.m.d h:m'),
        ];
    }
}
