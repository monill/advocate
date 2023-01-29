<?php

namespace App\Http\Controllers\Dashboard\Financial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Financial\AccountRequest;
use App\Models\FinancialAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $accounts = FinancialAccount::with('banks:id,name')->select('id', 'name', 'agency', 'account_number')->get();
        return view('dashboard.financials.accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('dashboard.financials.accounts.create');
    }

    public function store(AccountRequest $request)
    {
        FinancialAccount::create($request->except('_token'));
        return redirect()->route('accounts.index');
    }

    public function edit($account_id)
    {
        $account = FinancialAccount::findOrFail($account_id);
        $banks = DB::table('banks')->select('id', 'name')->pluck('name', 'id');
        return view('dashboard.financials.accounts.create', compact('account', 'banks'));
    }

    public function update(AccountRequest $request, $account_id)
    {
        FinancialAccount::findOrFail($account_id)->update($request->except('_token'));
        return  redirect()->route('accounts.index');
    }

    public function destroy($account_id)
    {
        FinancialAccount::findOrFail($account_id)->delete();
        return redirect()->route('accounts.index');
    }
}
