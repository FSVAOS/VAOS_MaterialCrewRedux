<?php

namespace Modules\MaterialCrewRedux\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class MaterialCrewReduxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('materialcrewredux::index');
    }

    public function getSchedule() {
        return \response()->json(Schedule::allFK());
    }
}
