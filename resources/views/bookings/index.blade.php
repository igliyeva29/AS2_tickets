@extends('layouts.app')
@section('content')
    <div class="container-xl py-5 text-center">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Passenger id</th>
                    <th>Flight number</th>
                    <th>From city</th>
                    <th>To city</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->passenger_id }}</td>
                        <td>{{ $booking->flight->airline->flight_number }}</td>
                        <td>{{ $booking->flight->from_city }}</td>
                        <td>{{ $booking->flight->to_city }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection