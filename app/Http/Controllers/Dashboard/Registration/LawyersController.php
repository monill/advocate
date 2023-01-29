<?php

namespace App\Http\Controllers\Dashboard\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LawyersController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('dashboard.registration.lawyers.index');
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
