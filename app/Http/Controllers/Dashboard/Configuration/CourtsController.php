<?php

namespace App\Http\Controllers\Dashboard\Configuration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\CourtsRequest;
use App\Models\Court;
use Illuminate\Support\Facades\DB;

class CourtsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $courts = DB::table('courts')->select('id', 'name')->get();
        return view('dashboard.configuration.courts.index', compact('courts'));
    }

    public function create()
    {
        return view('dashboard.configuration.courts.create');
    }

    public function store(CourtsRequest $request)
    {
        Court::create($request->except('_token'));
        return redirect()->route('courts.index');
    }

    public function edit($court_id)
    {
        $court = Court::findOrFail($court_id);
        return view('dashboard.configuration.courts.edit', compact('court'));
    }

    public function update(CourtsRequest $request, $court_id)
    {
        Court::findOrFail($court_id)->update($request->except('_token'));
        return redirect()->route('courts.index');
    }

    public function destroy($court_id)
    {
        Court::findOrFail($court_id)->delete();
        return redirect()->route('courts.index');
    }
}
