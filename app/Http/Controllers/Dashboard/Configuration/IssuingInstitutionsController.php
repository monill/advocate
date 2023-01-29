<?php

namespace App\Http\Controllers\Dashboard\Configuration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\IssuingInstitutionsRequest;
use App\Models\IssuingInstitution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IssuingInstitutionsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $institutions = DB::table('issuing_institutions')->select('id', 'name')->get();
        return view('dashboard.configurations.issuing_institutions.index', compact('institutions'));
    }

    public function create()
    {
        return view('dashboard.configurations.issuing_institutions.create');
    }

    public function store(IssuingInstitutionsRequest $request)
    {
        IssuingInstitution::create($request->except('_token'));
        return redirect()->route('issuing-institutions.index');
    }

    public function edit($institution_id)
    {
        $institution = IssuingInstitution::findOrFail($institution_id);
        return view('dashboard.configurations.issuing_institutions.edit', compact('institution'));
    }

    public function update(IssuingInstitutionsRequest $request, $institution_id)
    {
        IssuingInstitution::findOrFail($institution_id)->update($request->except('_token'));
        return redirect()->route('issuing-institutions.index');
    }

    public function destroy($institution_id)
    {
        IssuingInstitution::findOrFail($institution_id)->delete();
        return redirect()->route('issuing-institutions.index');
    }
}
