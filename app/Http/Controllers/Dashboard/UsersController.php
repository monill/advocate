<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('dashboard.users.index');
    }
}
