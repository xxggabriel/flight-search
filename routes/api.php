<?php

use App\Http\Controllers\Api\FlightController;
use Illuminate\Support\Facades\Route;

Route::get('/api/flights/optimal', [FlightController::class, 'getOptimalFlights']);
