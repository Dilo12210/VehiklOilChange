@extends('layouts.app')

@section('content')
    <h1>Oil Change Checker</h1>
    <p>Enter your car's details to see if it is due for an oil change.</p>

    @if ($errors->any())
        <div class="error">
            <strong>Please fix the following:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('oil-change.store') }}">
        @csrf

        <p>
            <label>Current Odometer</label>
            <input type="number" name="current_odometer" value="{{ old('current_odometer') }}">
        </p>

        <p>
            <label>Date of Previous Oil Change</label>
            <input type="date" name="previous_oil_change_date" value="{{ old('previous_oil_change_date') }}">
        </p>

        <p>
            <label>Odometer at Previous Oil Change</label>
            <input type="number" name="previous_oil_change_odometer" value="{{ old('previous_oil_change_odometer') }}">
        </p>

        <button type="submit">Check Oil Change</button>
    </form>
@endsection