<?php

namespace App\Http\Controllers\Dashboard\Types;

use App\Http\Controllers\Controller;
use App\Http\Requests\Types\TypesRequest;
use App\Models\TypeDefender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DefendersController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $types = DB::table('type_defenders')->select('id', 'name')->get();
        return view('dashboard.types.defenders.index', compact('types'));
    }

    public function create()
    {
        return view('dashboard.types.defenders.create');
    }

    public function store(TypesRequest $request)
    {
        TypeDefender::create($request->except('_token'));
        return redirect()->route('defenders.index');
    }

    public function edit($type_id)
    {
        $type = TypeDefender::findOrFail($type_id);
        return view('dashboard.types.defenders.edit', compact('type'));
    }

    public function update(TypesRequest $request, $type_id)
    {
        TypeDefender::findOrFail($type_id)->update($request->except('_token'));
        return redirect()->route('defenders.index');
    }

    public function destroy($type_id)
    {
        TypeDefender::findOrFail($type_id)->delete();
        return redirect()->route('defenders.index');
    }
}
