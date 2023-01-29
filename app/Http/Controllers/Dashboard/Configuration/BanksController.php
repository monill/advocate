<?php

namespace App\Http\Controllers\Dashboard\Configuration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\BanksRequest;
use App\Models\Bank;
use Illuminate\Support\Facades\DB;

class BanksController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $banks = DB::table('banks')->select('id', 'code', 'name', 'ispb')->get();
        return view('dashboard.configurations.banks.index', compact('banks'));
    }

    public function create()
    {
        return view('dashboard.configurations.banks.create');
    }

    public function store(BanksRequest $request)
    {
        Bank::create($request->except('_token'));
        return redirect()->route('banks.index');
    }

    public function edit($bank_id)
    {
        $bank = Bank::findOrFail($bank_id);
        return view('dashboard.configurations.banks.edit', compact('bank'));
    }

    public function update(BanksRequest $request, $bank_id)
    {
        Bank::findOrFail($bank_id)->update($request->except('_token'));
        return redirect()->route('banks.index');
    }

    public function destroy($bank_id)
    {
        Bank::findOrFail($bank_id)->delete();
        return redirect()->route('banks.index');
    }
}
