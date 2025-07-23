@extends('layouts.app')
@section('content')
    <div class="container-xl py-5">
        <div class="row justify-content-between">
            <div class="col-3">
                @include('app.filter')
            </div>
            <div class="col text-center">
                @if ($flights->isNotEmpty())
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Airlines</th>
                                <th>From city</th>
                                <th>To city</th>
                                <th>Departure time</th>
                                <th>Arrival time</th>
                                <th>Duration time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($flights as $flight)
                                <tr>
                                    <td>{{ $flight->airline->name}}</td>
                                    <td>{{ $flight->from_city }}</td>
                                    <td>{{ $flight->to_city }}</td>
                                    <td>{{ date_format($flight->departure_time, "d.m.Y H:m") }}</td>
                                    <td>{{ date_format($flight->arrival_time, "d.m.Y H:m")  }}</td>
                                    <td>{{ $flight->duration_time }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="col text-center">
                        <div class="display-5 text-center fw-semibold">
                            Flight not found
                        </div>
                    </div>
                @endif
                <div class="my-5">
                    {{ $flights->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection