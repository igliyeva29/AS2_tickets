<form action="{{ route('flights') }}" method="get">
    <div class="mb-3">
        <label for="q" class="form-label">Search:</label>
        <input type="text" id="q" name="q" value="{{ $f_q ? $f_q : '' }}" class="form-control" placeholder="Ashgabat">
    </div>
    <div class="mb-3">
        <label for="airlines" class="form-label">Airline:</label>
        <select id="airlines" name="airlines" class="form-select">
            <option value="">-</option>
            @foreach ($airlines as $airline)
                <option value="{{ $airline->id }}" {{ $airline->id == $f_airlines ? 'selected' : '' }}>
                    {{ $airline->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="py-3">
        <a href="{{ route('flights') }}" class="btn btn-secondary px-4 mx-2"><i class="bi bi-x"></i>
            Reset</a>
        <button type="submit" class="btn btn-primary px-4 mx-2">Submit</button>
    </div>
</form>