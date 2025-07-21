<?php

namespace App\Http\Controllers;

use App\Models\Fare;
use Illuminate\Http\Request;

class FareController extends Controller
{
    public function index()
    {
        $fares = Fare::get();
        
        return view('fares.index')->with(
            [
                'fares' => $fares,
            ]
        );
    }
}
