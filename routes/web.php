<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OilChangeCheckController;

Route::get('/', [OilChangeCheckController::class, 'create'])->name('oil-change.create');
Route::post('/check', [OilChangeCheckController::class, 'store'])->name('oil-change.store');
Route::get('/result/{oilChangeCheck}', [OilChangeCheckController::class, 'show'])->name('oil-change.show');