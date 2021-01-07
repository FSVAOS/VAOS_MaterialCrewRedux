<?php

namespace Modules\MaterialCrewRedux\Http\Controllers;

use App\Classes\VAOS_Schedule;
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
    public function getSchedule() {
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
}
