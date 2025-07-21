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
                        <a href="{{ route('flights') }}" class="btn btn-secondary"><i class="bi bi-x"></i>Reset</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection