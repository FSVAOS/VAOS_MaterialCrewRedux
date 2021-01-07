<?php

namespace Modules\MaterialCrewRedux\Http\Controllers;

use App\Models\User;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $upcoming = Flight::where('user_id', $request->user()->id)->filed()->count();
        $completed = Flight::where('user_id', $request->user()->id)->completed()->count();
        return response()->json([
            'user' => $user, 'upcoming' => $upcoming, 'completed' => $completed
        ]);
    }
}
