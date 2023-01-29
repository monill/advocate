<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitiesController extends Controller
{
    public function states()
    {
        $states = DB::table('states')
            ->select('id', 'name')
            ->get();

        return response()->json($states);
    }

    public function cities(int $state_id)
    {
        $cities = DB::table('cities')
            ->select('id', 'name')
            ->where('state_id', $state_id)
            ->get();

        return response()->json($cities);
    }
}
