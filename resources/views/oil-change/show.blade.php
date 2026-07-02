@extends('layouts.app')

@section('content')
    <h1>Oil Change Result</h1>

    @if ($isDue)
        <div class="warning">
            <h2>Your car is due for an oil change.</h2>
        </div>
    @else
        <div class="success">
            <h2>Your car is not due for an oil change yet.</h2>
        </div>
    @endif

    <div class="details">
        <p><strong>Current Odometer:</strong> {{ $oilChangeCheck->current_odometer }} km</p>
        <p><strong>Date of Previous Oil Change:</strong> {{ $oilChangeCheck->previous_oil_change_date }}</p>
        <p><strong>Odometer at Previous Oil Change:</strong> {{ $oilChangeCheck->previous_oil_change_odometer }} km</p>
        <p><strong>Kilometers Driven Since Last Oil Change:</strong> {{ $kilometersDriven }} km</p>
        <p><strong>Months Since Last Oil Change:</strong> {{ $monthsSinceOilChange }}</p>
    </div>

    <a class="button" href="{{ route('oil-change.create') }}">Check another car</a>
@endsection