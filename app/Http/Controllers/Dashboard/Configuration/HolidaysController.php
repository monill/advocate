<?php

namespace App\Http\Controllers\Dashboard\Configuration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\HolidaysRequest;
use App\Models\Holiday;
use Illuminate\Support\Facades\DB;

class HolidaysController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        //TODO
        //adicionar mini calendario com todos os meses???
        $holidays = DB::table('holidays')->select('id', 'name', 'day', 'month', 'year', 'is_repeated')->get();
        return view('dashboard.configurations.holidays.index', compact('holidays'));
    }

    public function create()
    {
        $months = months();
        return view('dashboard.configurations.holidays.create', compact('months'));
    }

    public function store(HolidaysRequest $request)
    {
        Holiday::create($request->except('_token'));
        return redirect()->route('holidays.index');
    }

    public function edit($holiday_id)
    {
        $holiday = Holiday::findOrFail($holiday_id);
        $months = months();
        return view('dashboard.configurations.holidays.edit', compact('holiday', 'months'));
    }

    public function update(HolidaysRequest $request, $holiday_id)
    {
        Holiday::findOrFail($holiday_id)->update($request->except('_token'));
        return redirect()->route('holidays.index');
    }

    public function destroy($holiday_id)
    {
        Holiday::findOrFail($holiday_id)->delete();
        return redirect()->route('holidays.index');
    }
}
