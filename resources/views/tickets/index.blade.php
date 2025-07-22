@extends('layouts.app')
@section('content')
    <div class="container-xl py-5 text-center">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Seat number</th>
                    <th>Seat type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($seats as $seat)
                    <tr>
                        <td>{{ $seat->seat_number }}</td>
                        <td>{{ $seat->seat_type }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection