<?php

namespace App\Http\Controllers\Dashboard\Types;

use App\Http\Controllers\Controller;
use App\Http\Requests\Types\TypesRequest;
use App\Models\TypeJustice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JusticesController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $types = DB::table('type_justices')->select('id', 'name')->get();
        return view('dashboard.types.justices.index', compact('types'));
    }

    public function create()
    {
        return view('dashboard.types.justices.create');
    }

    public function store(TypesRequest $request)
    {
        TypeJustice::create($request->except('_token'));
        return redirect()->route('justices.index');
    }

    public function edit($type_id)
    {
        $type = TypeJustice::findOrFail($type_id);
        return view('dashboard.types.justices.edit', compact('type'));
    }

    public function update(TypesRequest $request, $type_id)
    {
        TypeJustice::findOrFail($type_id)->update($request->except('_token'));
        return redirect()->route('justices.index');
    }

    public function destroy($type_id)
    {
        TypeJustice::findOrFail($type_id)->delete();
        return redirect()->route('justices.index');
    }
}
