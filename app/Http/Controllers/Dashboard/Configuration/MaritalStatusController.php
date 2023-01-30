<?php

namespace App\Http\Controllers\Dashboard\Configuration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\MaritalStatusRequest;
use App\Models\MaritalStatus;
use Illuminate\Support\Facades\DB;

class MaritalStatusController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $statuses = DB::table('marital_status')->select('id', 'name')->get();
        return view('dashboard.configuration.marital_statuses.index', compact('statuses'));
    }

    public function create()
    {
        return view('dashboard.configuration.marital_statuses.create');
    }

    public function store(MaritalStatusRequest $request)
    {
        MaritalStatus::create($request->except('_token'));
        return redirect()->route('marital-status.index');
    }

    public function edit($status_id)
    {
        $status = MaritalStatus::findOrFail($status_id);
        return view('dashboard.configuration.marital_statuses.edit', compact('status'));
    }

    public function update(MaritalStatusRequest $request, $status_id)
    {
        MaritalStatus::findOrFail($status_id)->update($request->except('_token'));
        return redirect()->route('marital-status.index');
    }

    public function destroy($status_id)
    {
        MaritalStatus::findOrFail($status_id)->delete();
        return redirect()->route('marital-status.index');
    }
}
