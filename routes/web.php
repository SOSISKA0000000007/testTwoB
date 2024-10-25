<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OffersController;

Route::get('/', [OffersController::class, 'index'])->name('offers.index');
Route::post('/', [OffersController::class, 'store'])->name('offers.store');


