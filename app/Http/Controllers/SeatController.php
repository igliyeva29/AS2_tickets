<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{

    public function index()
    {
        $seats = Seat::get();

        return view('seats.index')->with(
            [
                'seats' => $seats,
            ]
        );
    }
}

