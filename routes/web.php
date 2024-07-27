<?php

require_once __DIR__ . '/api.php';

use App\Http\Controllers\Web\FlightController;
use Illuminate\Support\Facades\Route;

Route::get('/flights', [FlightController::class, 'flights']);
