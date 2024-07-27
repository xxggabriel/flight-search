<?php

namespace App\Http\Controllers\Web;

use App\Models\Airport;
use App\Models\Flight;
use App\Services\FlightService;
use Illuminate\Http\Request;

class FlightController
{

    protected $flightService;

    public function __construct(FlightService $flightService)
    {
        $this->flightService = $flightService;
    }

    public function flights(Request $request)
    {
        $startAirportId = $request->start_airport_id;
        $endAirportId = $request->end_airport_id;
        $outboundFlights = $this->flightService->findOptimalFlights($startAirportId, $endAirportId);

        $airports = Airport::all();

        $flights_ida = [];
        $flights_volta = [];

        foreach ($outboundFlights as $value) {
            $flights = [];

            foreach ($value['path'] as $key => $path) {
                if($key + 1 < count($value['path'])) {
                    $flights[] = Flight::where('start_airport_id', $path)->where('end_airport_id', $value['path'][$key + 1])->first();
                }
            }

            $flights_ida[] = [
                'flights' => $flights,
                'price' => $value['cost'],
                'time_in_minutes' => $value['time'],
                'distance' => $value['distance']
            ];
        }


        return view('flights', compact('flights_ida', 'airports'));
    }
}
