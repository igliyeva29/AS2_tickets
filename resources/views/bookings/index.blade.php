@extends('layouts.app')
@section('content')
    <div class="container-xl py-5 text-center">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Airlines</th>
                    <th>Flight number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($airlines as $airline)
                    <tr>
                        <td>{{ $airline->name }}</td>
                        <td>{{ $airline->flight_number }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection