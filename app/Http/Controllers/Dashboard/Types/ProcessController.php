<?php

namespace App\Http\Controllers\Dashboard\Types;

use App\Http\Controllers\Controller;
use App\Http\Requests\Types\TypesRequest;
use App\Models\TypeProcess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcessController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $types = DB::table('type_process')->select('id', 'name')->get();
        return view('dashboard.types.cases.index', compact('types'));
    }

    public function create()
    {
        return view('dashboard.types.cases.create');
    }

    public function store(TypesRequest $request)
    {
        TypeProcess::create($request->except('_token'));
        return redirect()->route('cases.index');
    }

    public function edit($type_id)
    {
        $type = TypeProcess::findOrFail($type_id);
        return view('dashboard.types.cases.edit', compact('type'));
    }

    public function update(TypesRequest $request, $type_id)
    {
        TypeProcess::findOrFail($type_id)->update($request->except('_token'));
        return redirect()->route('cases.index');
    }

    public function destroy($type_id)
    {
        TypeProcess::findOrFail($type_id)->delete();
        return redirect()->route('cases.index');
    }
}
