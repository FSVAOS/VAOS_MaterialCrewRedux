<?php

namespace Modules\MaterialCrewRedux\Http\Controllers;

use App\Classes\VAOS_Schedule;
use App\Models\Flight;
use App\Models\Schedule;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FlightsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function index(Request $request): \Illuminate\Http\JsonResponse
    {
        $flights = Flight::where('user_id', $request->user()->id)->with('user', 'airline', 'depapt', 'arrapt', 'aircraft')->filed()->get();

        foreach ($flights as $f) {
            if (! is_null($f['airline_id'])) {
                $f->flight = $f->airline->icao.$f->flightnum;
            } else {
                $f->flight = $f->flightnum;
            }
        }
        return response()->json($flights);
    }
    public function show($id): \Illuminate\Http\JsonResponse
    {
        $flight = Flight::with('user', 'fo')->with('airline')->with('depapt')->with('arrapt')->with('aircraft')->find($id);
        return response()->json($flight);
    }
    public function getSchedule(): \Illuminate\Http\JsonResponse
    {
        $schedules = Schedule::with('depapt')->with('arrapt')->with('airline')->with('aircraft_group')->get();
        //$schedules = Schedule::all();
        //dd($schedules);
        // Return the view
        $output = [];
        foreach ($schedules as $s) {
            $s->primary_aircraft = null;
            if (is_null($s->deptime)) {
                $s->deptime = 'N/A';
            }
            if (is_null($s->arrtime)) {
                $s->arrtime = 'N/A';
            }
            foreach ($s->aircraft_group as $a) {
                if ($a['pivot']['primary']) {
                    $s->primary_aircraft = $a->icao;
                }
            }
            $s->callsign = $s->getCallsign();
        }

        //return $schedules;
        return \response()->json($schedules);
    }
    public function createBid(Request $request) {
        $inputs = $request->all();
        VAOS_Schedule::fileBid($request->user(), $inputs['id']);
    }
    public function startFlight(Request $request, $id) {
        $flight = Flight::find($id);
        $flight->state = 1;
        $flight->save();
        return response()->json($flight);
    }
}
