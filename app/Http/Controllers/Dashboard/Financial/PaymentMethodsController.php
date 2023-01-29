<?php

namespace App\Http\Controllers\Dashboard\Financial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Financial\PaymentMethodRequest;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentMethodsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $methods = DB::table('payment_methods')->select('id', 'name')->get();
        return view('dashboard.financials.payment_methods.index', compact('methods'));
    }

    public function create()
    {
        return view('dashboard.financials.payment_methods.create');
    }

    public function store(PaymentMethodRequest $request)
    {
        PaymentMethod::create($request->except('_token'));
        return redirect()->route('payment-methods.index');
    }

    public function edit($method_id)
    {
        $method = PaymentMethod::findOrFail($method_id);
        return view('dashboard.financials.payment_methods.edit', compact('method'));
    }

    public function update(PaymentMethodRequest $request, $method_id)
    {
        PaymentMethod::findOrFail($method_id)->update($request->except('_token'));
        return redirect()->route('payment-methods.index');
    }

    public function destroy($method_id)
    {
        PaymentMethod::findOrFail($method_id)->delete();
        return redirect()->route('payment-methods.index');
    }
}
