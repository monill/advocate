<?php

namespace App\Http\Controllers\Dashboard\Configuration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\GendersRequest;
use App\Models\Gender;
use Illuminate\Support\Facades\DB;

class GendersController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $genders = DB::table('genders')->select('id', 'name')->get();
        return view('dashboard.configurations.genders.index', compact('genders'));
    }

    public function create()
    {
        return view('dashboard.configurations.genders.create');
    }

    public function store(GendersRequest $request)
    {
        Gender::create($request->except('_token'));
        return redirect()->route('genders.index');
    }

    public function edit($gender_id)
    {
        $gender = Gender::findOrFail($gender_id);
        return view('dashboard.configurations.genders.edit', compact('gender'));
    }

    public function update(GendersRequest $request, $gender_id)
    {
        Gender::findOrFail($gender_id)->update($request->except('_token'));
        return redirect()->route('genders.index');
    }

    public function destroy($gender_id)
    {
        Gender::findOrFail($gender_id)->delete();
        return redirect()->route('genders.index');
    }
}
