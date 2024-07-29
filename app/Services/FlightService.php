<?php

namespace App\Services;

use App\Models\Flight;
use Illuminate\Support\Collection;

class FlightService
{
    public function findOptimalFlights($startAirportId, $endAirportId)
    {
        $flights = Flight::all();
        $graph = [];

        foreach ($flights as $flight) {
            if (!isset($graph[$flight->start_airport_id])) {
                $graph[$flight->start_airport_id] = [];
            }
            $graph[$flight->start_airport_id][] = $flight;
        }

        return $this->aSearchPareto($startAirportId, $endAirportId, $graph);
    }

    private function aSearchPareto(int $start, int $goal, $graph)
    {
        $openSet = new \SplPriorityQueue();
        $openSet->insert([$start, [], 0, 0, 0], 0); // (currentNode, path, cost, time, distance)
        $closedSet = [];

        $paretoFrontier = [];

        while (!$openSet->isEmpty()) {
            list($current, $path, $cost, $time, $distance) = $openSet->extract();
            $path[] = $current;

            // Limit the number of stops to 3
            if(count($path) > 3) {
                continue;
            }

            if ($current == $goal) {
                $paretoFrontier[] = compact('path', 'cost', 'time', 'distance');
                continue; // Continue searching to find other Pareto optimal solutions
            }

            if (isset($closedSet[$current])) {
                continue;
            }

            $closedSet[$current] = true;

            if (!isset($graph[$current])) {
                continue;
            }

            foreach ($graph[$current] as $neighbor) {
                $newCost = $cost + $neighbor->price;
                $newTime = $time + $neighbor->time_in_minutes;
                $newDistance = $distance + $neighbor->distance;

                $priority = $this->heuristics($newCost, $newTime, $newDistance); // Use priority to determine the best path

                $openSet->insert(
                    [$neighbor->end_airport_id, $path, $newCost, $newTime, $newDistance],
                    $priority
                );
            }

        }


        return $this->filterParetoOptimal($paretoFrontier);
    }

    private function heuristics($cost, $time, $distance)
    {
        return -($cost * 0.1 + $time + $distance * 0.1);
    }

    private function filterParetoOptimal($solutions)
    {
        $paretoFront = [];

        foreach ($solutions as $solution) {
            $dominated = false;
            foreach ($paretoFront as $front) {
                if ($this->dominates($front, $solution)) {
                    $dominated = true;
                    break;
                }
            }
            if (!$dominated) {
                $paretoFront[] = $solution;
            }
        }

        return $paretoFront;
    }

    private function dominates($a, $b)
    {
        return ($a['cost'] <= $b['cost'] && $a['time'] <= $b['time'] && $a['distance'] <= $b['distance']) &&
               ($a['cost'] < $b['cost'] || $a['time'] < $b['time'] || $a['distance'] < $b['distance']);
    }
}
