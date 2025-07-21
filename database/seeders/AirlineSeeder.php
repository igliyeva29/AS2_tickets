<?php

namespace Database\Seeders;

use App\Models\Airline;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'T5' => 'Turkmenistan Airlines',
            'AA' => 'American Airlines',
            'BA' => 'British Airways',
            'AC' => 'Air Canada',
            'LH' => 'Lufthansa', //Germany
            'AF' => 'Air France',
            'TK' => 'Turkish Airlines',
            'EK' => 'Emirates',
            'QR' => 'Qatar Airways',
            'JL' => 'Japan Airlines',
            'CZ' => 'China Southern Airlines',
            'QF' => 'Qantas', //Australia
            '6E' => 'IndiGo',
            'MH' => 'Malaysia Airlines',
            'IR' => 'Iran Air',
        ];

        foreach ($objs as $key => $value) {
            Airline::create([
                'name' => $value,
                'flight_number' => $key . fake()->numberBetween(1,9999),
            ]);
        }
    }
}
