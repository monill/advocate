<?php

namespace App\Http\Controllers\Dashboard\Configuration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\OccupationsRequest;
use App\Models\Occupation;
use Illuminate\Support\Facades\DB;

class OccupationsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $professionals = DB::table('occupations')->select('id', 'name')->get();
        return view('dashboard.configuration.professionals.index', compact('professionals'));
    }

    public function create()
    {
        return view('dashboard.configuration.professionals.create');
    }

    public function store(OccupationsRequest $request)
    {
        Occupation::create($request->except('_token'));
        return redirect()->route('professionals.index');
    }

    public function edit($professional_id)
    {
        $professional = Occupation::findOrFail($professional_id);
        return view('dashboard.configuration.professionals.edit', compact('professional'));
    }

    public function update(OccupationsRequest $request, $professional_id)
    {
        Occupation::findOrFail($professional_id)->update($request->except('_token'));
        return redirect()->route('professionals.index');
    }

    public function destroy($professional_id)
    {
        Occupation::findOrFail($professional_id)->delete();
        return redirect()->route('professionals.index');
    }
}
