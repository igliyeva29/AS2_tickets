@extends('layouts.app')
@section('content')
    <div class="container-xl py-5">
        <div class="row justify-content-between">
            <div class="col-3">
                <form action="{{ route('flights') }}" method="get">
                    <div class="mb-3">
                        <label for="q" class="form-label">Search:</label>
                        <input type="text" id="q" name="q" value="{{ $f_q ? $f_q : '' }}" class="form-control"
                            placeholder="Ashgabat">
                    </div>
                    <div class="mb-3">
                        <label for="airline" class="form-label">Airline:</label>
                        <select id="airline" name="airline" class="form-select">
                            <option value="">-</option>
                            @foreach ($airlines as $airline)
                                <option value="{{ $airline->id }}" {{ $airline->id == $f_airlines ? 'selected' : '' }}>
                                    {{ $airline->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="py-3">
                        <a href="{{ route('flights') }}" class="btn btn-secondary px-4 me-5"><i
                                class="bi bi-x"></i>Reset</a>
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-9 text-center">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Airlines</th>
                            <th>From_city</th>
                            <th>To_city</th>
                            <th>Departure_time</th>
                            <th>Arrival_time</th>
                            <th>Duration_time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($flights as $flight)
                            <tr>
                                <td>{{ $flight->airline->name}}</td>
                                <td>{{ $flight->from_city }}</td>
                                <td>{{ $flight->to_city }}</td>
                                <td>{{ $flight->departure_time }}</td>
                                <td>{{ $flight->arrival_time }}</td>
                                <td>{{ $flight->duration_time }}</td>
                            </tr>
                        @empty
                            <div class="col-12">
                                <div class="display-4 text-center fw-semibold">
                                    Flight not found
                                </div>
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection