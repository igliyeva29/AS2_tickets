<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $airlines = Airline::get();
        
        return view('home.index')->with(
            [
                'airlines' => $airlines,
            ]
        );
    }
}
