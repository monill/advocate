<?php

namespace App\Http\Controllers\Dashboard\Configuration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\ProceduralConditionRequest;
use App\Models\ProceduralCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProceduralConditionController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $conditions = DB::table('procedural_conditions')->select('id', 'name')->get();
        return view('dashboard.configuration.procedural_conditions.index', compact('conditions'));
    }

    public function create()
    {
        return view('dashboard.configuration.procedural_conditions.create');
    }

    public function store(ProceduralConditionRequest $request)
    {
        ProceduralCondition::create($request->except('_token'));
        return redirect()->route('procedural-conditions.index');
    }

    public function edit($condition_id)
    {
        $condition = ProceduralCondition::findOrFail($condition_id);
        return view('dashboard.configuration.procedural_conditions.edit', compact('condition'));
    }

    public function update(ProceduralConditionRequest $request, $condition_id)
    {
        ProceduralCondition::findOrFail($condition_id)->update($request->except('_token'));
        return redirect()->route('procedural-conditions.index');
    }

    public function destroy($condition_id)
    {
        ProceduralCondition::findOrFail($condition_id)->delete();
        return redirect()->route('procedural-conditions.index');
    }
}
