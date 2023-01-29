<?php

namespace App\Http\Controllers\Dashboard\Configuration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\JudgesRequest;
use App\Models\Judge;
use Illuminate\Support\Facades\DB;

class JudgesController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $judges = DB::table('judges')->select('id', 'name')->get();
        return view('dashboard.configurations.judges.index', compact('judges'));
    }

    public function create()
    {
        return view('dashboard.configurations.judges.create');
    }

    public function store(JudgesRequest $request)
    {
        Judge::create($request->except('_token'));
        return redirect()->route('judges.index');
    }

    public function edit($judge_id)
    {
        $judge = Judge::findOrFail($judge_id);
        return view('dashboard.configurations.judges.edit', compact('judge'));
    }

    public function update(JudgesRequest $request, $judge_id)
    {
        Judge::findOrFail($judge_id)->update($request->except('_token'));
        return redirect()->route('judges.index');
    }

    public function destroy($judge_id)
    {
        Judge::findOrFail($judge_id)->delete();
        return redirect()->route('judges.index');
    }
}
