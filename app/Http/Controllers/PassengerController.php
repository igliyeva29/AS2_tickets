<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function index()
    {
        $passengers = Passenger::get();

        return view('passengers.index')->with(
            [
                'passengers' => $passengers,
            ]
        );
    }
}
