<?php

namespace App\Http\Controllers;

use App\Models\OilChangeCheck;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OilChangeCheckController extends Controller
{
    public function create()
    {
        return view('oil-change.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'current_odometer' => ['required', 'integer', 'min:0', 'gte:previous_oil_change_odometer'],
            'previous_oil_change_date' => ['required', 'date', 'before:today'],
            'previous_oil_change_odometer' => ['required', 'integer', 'min:0'],
        ]);

        $oilChangeCheck = OilChangeCheck::create($validated);

        return redirect()->route('oil-change.show', $oilChangeCheck);
    }

    public function show(OilChangeCheck $oilChangeCheck)
    {
        $kilometersDriven = $oilChangeCheck->current_odometer - $oilChangeCheck->previous_oil_change_odometer;

        $monthsSinceOilChange = Carbon::parse($oilChangeCheck->previous_oil_change_date)->diffInMonths(now());

        $isDue = $kilometersDriven > 5000 || $monthsSinceOilChange > 6;

        return view('oil-change.show', [
            'oilChangeCheck' => $oilChangeCheck,
            'kilometersDriven' => $kilometersDriven,
            'monthsSinceOilChange' => $monthsSinceOilChange,
            'isDue' => $isDue,
        ]);
    }
}