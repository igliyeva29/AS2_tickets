<?php

namespace Database\Seeders;

use App\Models\Fare;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Seat;
use App\Models\Ticket;
use App\Models\Booking;
use App\Models\Passenger;
use Illuminate\Database\Seeder;
use Database\Seeders\FlightSeeder;
use Database\Seeders\AirlineSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $this->call([
            AirlineSeeder::class,
            FlightSeeder::class,
        ]);

        Passenger::factory()->count(10)->create();
        Booking::factory()->count(5)->create();
        Fare::factory()->count(10)->create();
        Seat::factory()->count(10)->create();
        Ticket::factory()->count(10)->create();
    }
}
