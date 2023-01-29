<?php

namespace App\Http\Controllers\Dashboard\Registration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Registration\PrintingsRequest;
use App\Models\Printing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrintingsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $prints = DB::table('printings')->select('id', 'name')->get();
        return view('dashboard.registration.prints.index', compact('prints'));
    }

    public function create()
    {
        return view('dashboard.registration.prints.create');
    }

    public function store(PrintingsRequest $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = $request->user()->id;

        Printing::create($data);

        return redirect()->route('prints.index');
    }

    public function show($print_id)
    {
        $print = Printing::findOrFail($print_id);
        return view('dashboard.registration.prints.show', compact('print'));
    }

    public function edit($print_id)
    {
        $print = Printing::findOrFail($print_id);
        return view('dashboard.registration.prints.edit', compact('print'));
    }

    public function update(PrintingsRequest $request, $print_id)
    {
        Printing::findOrFail($print_id)->update($request->except('_token'));
        return redirect()->route('prints.index');
    }

    public function destroy($print_id)
    {
        Printing::findOrFail($print_id)->delete();
        return redirect()->route('prints.index');
    }
}
