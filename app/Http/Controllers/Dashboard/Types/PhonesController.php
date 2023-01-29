<?php

namespace App\Http\Controllers\Dashboard\Types;

use App\Http\Controllers\Controller;
use App\Http\Requests\Types\TypesRequest;
use App\Models\TypePhone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhonesController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $types = DB::table('type_phones')->select('id', 'name')->get();
        return view('dashboard.types.phones.index', compact('types'));
    }

    public function create()
    {
        return view('dashboard.types.phones.create');
    }

    public function store(TypesRequest $request)
    {
        TypePhone::create($request->except('_token'));
        return redirect()->route('phones.index');
    }

    public function edit($type_id)
    {
        $type = TypePhone::findOrFail($type_id);
        return view('dashboard.types.phones.edit', compact('type'));
    }

    public function update(TypesRequest $request, $type_id)
    {
        TypePhone::findOrFail($type_id)->update($request->except('_token'));
        return redirect()->route('phones.index');
    }

    public function destroy($type_id)
    {
        TypePhone::findOrFail($type_id)->delete();
        return redirect()->route('phones.index');
    }
}
