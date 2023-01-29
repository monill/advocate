<?php

namespace App\Http\Controllers\Dashboard\Registration;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $clientes = Customer::get();
        return view('dashboard.registration.clients.index', compact('clientes'));
    }

    public function create()
    {
        return view('dashboard.registration.clients.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
