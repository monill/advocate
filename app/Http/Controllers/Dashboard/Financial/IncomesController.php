<?php

namespace App\Http\Controllers\Dashboard\Financial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncomesController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('dashboard.financial.incomes.index');
    }

    public function create()
    {
        //
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
