<?php

namespace App\Http\Controllers\Dashboard\Types;

use App\Http\Controllers\Controller;
use App\Http\Requests\Types\TypesRequest;
use App\Models\TypeAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActionsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $types = DB::table('type_actions')->select('id', 'name')->get();
        return view('dashboard.types.actions.index', compact('types'));
    }

    public function create()
    {
        return view('dashboard.types.actions.create');
    }

    public function store(TypesRequest $request)
    {
        TypeAction::create($request->except('_token'));
        return redirect()->route('actions.index');
    }

    public function edit($type_id)
    {
        $type = TypeAction::findOrFail($type_id);
        return view('dashboard.types.actions.edit', compact('type'));
    }

    public function update(TypesRequest $request, $type_id)
    {
        TypeAction::findOrFail($type_id)->update($request->except('_token'));
        return redirect()->route('actions.index');
    }

    public function destroy($type_id)
    {
        TypeAction::findOrFail($type_id)->delete();
        return redirect()->route('actions.index');
    }
}
