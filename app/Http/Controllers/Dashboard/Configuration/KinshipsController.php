<?php

namespace App\Http\Controllers\Dashboard\Configuration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\KinshipsRequest;
use App\Models\Kinship;
use Illuminate\Support\Facades\DB;

class KinshipsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $kinships = DB::table('kinships')->select('id', 'name')->get();
        return view('dashboard.configurations.kinships.index', compact('kinships'));
    }

    public function create()
    {
        return view('dashboard.configurations.kinships.create');
    }

    public function store(KinshipsRequest $request)
    {
        Kinship::create($request->except('_token'));
        return redirect()->route('kinships.index');
    }

    public function edit($kinship_id)
    {
        $kinship = Kinship::findOrFail($kinship_id);
        return view('dashboard.configurations.kinships.edit', compact('kinship'));
    }

    public function update(KinshipsRequest $request, $kinship_id)
    {
        Kinship::findOrFail($kinship_id)->update($request->except('_token'));
        return redirect()->route('kinships.index');
    }

    public function destroy($kinship_id)
    {
        Kinship::findOrFail($kinship_id)->delete();
        return redirect()->route('kinships.index');
    }
}
