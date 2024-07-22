<?php

use App\Http\Controllers\Api\FlightController;
use Illuminate\Support\Facades\Route;

Route::get('/flights/optimal', [FlightController::class, 'getOptimalFlights']);
