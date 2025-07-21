@extends('layouts.app')
@section('content')
    <div class="container-xl py-5 text-center">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>From_city</th>
                    <th>To_city</th>
                    <th>Class_name</th>
                    <th>Price</th>
                    <th>Currency</th>
                    <th>Available_seats</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fares as $fare)
                    <tr>
                        <td>{{ $fare->flight->from_city }}</td>
                        <td>{{ $fare->flight->to_city }}</td>
                        <td>{{ $fare->class_name }}</td>
                        <td>{{ $fare->price }}</td>
                        <td>{{ $fare->currency }}</td>
                        <td>{{ $fare->available_seats }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection