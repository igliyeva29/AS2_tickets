<?php

namespace Database\Seeders;

use App\Models\Flight;
use App\Models\Airline;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Ashgabat',
            'Dashoguz',
            'Turkmenabat',
            'Mary',
            'Balkanabat',
            'Kerki',
            'Dubai',
            'Abu-Dabi',
            'Delhi',
            'Pekin',
            'Bangkok',
            'Kuala-Lampur',
            'London',
            'Milan',
            'Kazan',
            'Istambul',
            'Tokyo',
            'Chicago',
            'Shanghai',
            'Los Angeles',
            'Seoul',
            'Singapore',
            'Paris',
            'New York',
            'Frankfurt',
        ];

        foreach ($objs as $obj) {
            $airline = Airline::inRandomOrder()->first();
            $departureTime = fake()->dateTimeThisYear();
            $arrivalTime =  fake()->dateTimeThisYear();
            Flight::create([
                'airline_id' => $airline->id,
                'from_city' => fake()->randomElement($objs),
                'to_city' => fake()->randomElement($objs),
                'departure_time' => $departureTime,
                'arrival_time' => $arrivalTime ,
                'duration_time' => fake()->time('H:m'),
            ]);
        }
    }
}
