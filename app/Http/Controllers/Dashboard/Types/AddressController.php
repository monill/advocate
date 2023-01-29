<?php

namespace App\Http\Controllers\Dashboard\Types;

use App\Http\Controllers\Controller;
use App\Http\Requests\Types\TypesRequest;
use App\Models\TypeAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $types = DB::table('type_address')->select('id', 'name')->get();
        return view('dashboard.types.address.index', compact('types'));
    }

    public function create()
    {
        return view('dashboard.types.address.create');
    }

    public function store(TypesRequest $request)
    {
        TypeAddress::create($request->except('_token'));
        return redirect()->route('address.index');
    }

    public function edit($type_id)
    {
        $type = TypeAddress::findOrFail($type_id);
        return view('dashboard.types.address.edit', compact('type'));
    }

    public function update(TypesRequest $request, $type_id)
    {
        TypeAddress::findOrFail($type_id)->update($request->except('_token'));
        return redirect()->route('address.index');
    }

    public function destroy($type_id)
    {
        TypeAddress::findOrFail($type_id)->delete();
        return redirect()->route('address.index');
    }
}
