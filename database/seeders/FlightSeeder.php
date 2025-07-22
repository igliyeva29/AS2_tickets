<?php

namespace Database\Seeders;

use DateInterval;
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

        for ($i = 0; $i < 250; $i++) {
            foreach ($objs as $obj) {
                $from_city = fake()->randomElement($objs);
                $to_city = fake()->randomElement($objs);
                while ($from_city === $to_city) {
                    $to_city = fake()->randomElement($objs);
                }
                $airline = Airline::inRandomOrder()->first();
                $departureTime = fake()->dateTimeThisYear();
                $arrivalTime = (clone $departureTime)->add(new DateInterval('PT' . rand(2, 8) . 'H'));
                $durationTime = $arrivalTime->diff($departureTime);
                Flight::create([
                    'airline_id' => $airline->id,
                    'from_city' => $from_city,
                    'to_city' => $to_city,
                    'departure_time' => $departureTime,
                    'arrival_time' => $arrivalTime,
                    'duration_time' => $durationTime->format('%H:%M'),
                ]);
            }
        }
    }
}
