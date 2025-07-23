@extends('layouts.app')
@section('content')
    <div class="container-xl py-5 text-center">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Booking id</th>
                    <th>Seat number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->booking_id }}</td>
                        <td>{{ $ticket->seat_number }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection