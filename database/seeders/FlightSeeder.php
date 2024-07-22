<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $airports = \App\Models\Airport::all();

        foreach ($airports as $airport) {
            $otherAirports = $airports->filter(function ($a) use ($airport) {
                return $a->id !== $airport->id;
            });

            foreach ($otherAirports as $otherAirport) {
                $price = rand(100, 4000);
                $distance = rand(300, 4000);
                $timeInMinutes = intval($distance / 40);

                \App\Models\Flight::create([
                    'start_airport_id' => $airport->id,
                    'end_airport_id' => $otherAirport->id,
                    'price' => $price,
                    'time_in_minutes' => $timeInMinutes,
                    'distance' => $distance
                ]);
            }
        }
    }
}
