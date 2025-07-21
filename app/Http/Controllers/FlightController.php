<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Airline;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'q' => ['nullable', 'string', 'max:55'],
            'airlines' => ['nullable', 'integer', 'min:1'],
            'from_city' => ['nullable', 'integer', 'min:1'],
            'to_city' => ['nullable', 'integer', 'min:1'],
        ]);

        $f_q = $request->has('q') ? $request->q : null;
        $f_airlines = $request->has('airlines') ? $request->airlines : null;

        $flights = Flight::when(isset($f_q), function ($query) use ($f_q) {
            return $query->where(function ($query) use ($f_q) {
                $query->where('from_city', 'like', '%' . $f_q . '%')
                    ->orWhere('to_city', 'like', '%' . $f_q . '%');
            });
        })
            ->when(isset($f_airlines), function ($query) use ($f_airlines) {
                return $query->where('airlines_id', $f_airlines);
            });
        
        $airlines = Airline::get();
        return view('flights.index')->with(
            [
                'flights' => $flights,
                'airlines' => $airlines,
                'f_q' => $f_q,
                'f_airlines' => $f_airlines,
            ]
        );
    }
}
