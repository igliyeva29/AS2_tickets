<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::get();

        return view('tickets.index')->with(
            [
                'tickets' => $tickets,
            ]
        );
    }
}
