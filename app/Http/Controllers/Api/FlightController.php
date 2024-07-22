<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Airport;
use App\Http\Controllers\Controller;
use App\Services\FlightService;
use SplPriorityQueue;

class FlightController extends Controller
{
    protected $flightService;

    public function __construct(FlightService $flightService)
    {
        $this->flightService = $flightService;
    }

    public function getOptimalFlights(Request $request)
    {
        $startAirportId = $request->input('start_airport_id');
        $endAirportId = $request->input('end_airport_id');

        $flights = $this->flightService->findOptimalFlights($startAirportId, $endAirportId);

        return response()->json($flights);
    }
}
