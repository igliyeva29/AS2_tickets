@extends('layouts.app')
@section('content')
    <div class="container-xl py-5 text-center">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Passport number</th>
                    <th>Date of birth</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($passengers as $passenger)
                    <tr>
                        <td>{{ $passenger->id }}</td>
                        <td>{{ $passenger->first_name }}</td>
                        <td>{{ $passenger->last_name }}</td>
                        <td>{{ $passenger->passport_number }}</td>
                        <td>{{ $passenger->date_of_birth }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection