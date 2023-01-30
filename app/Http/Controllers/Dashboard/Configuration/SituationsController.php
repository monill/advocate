<?php

namespace App\Http\Controllers\Dashboard\Configuration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\SituationsRequest;
use App\Models\Situation;
use Illuminate\Support\Facades\DB;

class SituationsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $situations = DB::table('situations')->select('id', 'name')->get();
        return view('dashboard.configuration.situations.index', compact('situations'));
    }

    public function create()
    {
        return view('dashboard.configuration.situations.create');
    }

    public function store(SituationsRequest $request)
    {
        Situation::create($request->except('_token'));
        return redirect()->route('situations.index');
    }

    public function edit($situation_id)
    {
        $situation = Situation::findOrFail($situation_id);
        return view('dashboard.configuration.situations.edit', compact('situation'));
    }

    public function update(SituationsRequest $request, $situation_id)
    {
        Situation::findOrFail($situation_id)->update($request->except('_token'));
        return redirect()->route('situations.index');
    }

    public function destroy($situation_id)
    {
        Situation::findOrFail($situation_id)->delete();
        return redirect()->route('situations.index');
    }
}
