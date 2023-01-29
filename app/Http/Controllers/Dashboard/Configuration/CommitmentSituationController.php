<?php

namespace App\Http\Controllers\Dashboard\Configuration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\CommitmentSituationRequest;
use App\Models\CommitmentSituation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommitmentSituationController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $situations = DB::table('commitment_situations')->select('id', 'name')->get();
        return view('dashboard.configurations.commitment_situations.index', compact('situations'));
    }

    public function create()
    {
        return view('dashboard.configurations.commitment_situations.create');
    }

    public function store(CommitmentSituationRequest $request)
    {
        CommitmentSituation::create($request->except('_token'));
        return redirect()->route('commitment-situations.index');
    }

    public function edit($situation_id)
    {
        $situation = CommitmentSituation::findOrFail($situation_id);
        return view('dashboard.configurations.commitment_situations.edit', compact('situation'));
    }

    public function update(CommitmentSituationRequest $request, $situation_id)
    {
        CommitmentSituation::findOrFail($situation_id)->update($request->except('_token'));
        return redirect()->route('commitment-situations.index');
    }

    public function destroy($situation_id)
    {
        CommitmentSituation::findOrFail($situation_id)->delete();
        return redirect()->route('commitment-situations.index');
    }
}
