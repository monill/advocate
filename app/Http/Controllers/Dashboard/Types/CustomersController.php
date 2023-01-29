<?php

namespace App\Http\Controllers\Dashboard\Types;

use App\Http\Controllers\Controller;
use App\Http\Requests\Types\TypesRequest;
use App\Models\TypeCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $types = DB::table('type_customers')->select('id', 'name')->get();
        return view('dashboard.types.clients.index', compact('types'));
    }

    public function create()
    {
        return view('dashboard.types.clients.create');
    }

    public function store(TypesRequest $request)
    {
        TypeCustomer::create($request->except('_token'));
        return redirect()->route('clients.index');
    }

    public function edit($type_id)
    {
        $type = TypeCustomer::findOrFail($type_id);
        return view('dashboard.types.clients.edit', compact('type'));
    }

    public function update(TypesRequest $request, $type_id)
    {
        TypeCustomer::findOrFail($type_id)->update($request->except('_token'));
        return redirect()->route('clients.index');
    }

    public function destroy($type_id)
    {
        TypeCustomer::findOrFail($type_id)->delete();
        return redirect()->route('clients.index');
    }
}
