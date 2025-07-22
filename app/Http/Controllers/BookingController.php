<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::get();

        return view('bookings.index')->with(
            [
                'bookings' => $bookings,
            ]
        );
    }
}
