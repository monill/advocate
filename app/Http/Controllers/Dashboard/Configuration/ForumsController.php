<?php

namespace App\Http\Controllers\Dashboard\Configuration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\ForumsRequest;
use App\Models\Forum;
use Illuminate\Support\Facades\DB;

class ForumsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $forums = DB::table('forums')->select('id', 'name')->get();
        return view('dashboard.configurations.forums.index', compact('forums'));
    }

    public function create()
    {
        return view('dashboard.configurations.forums.create');
    }

    public function store(ForumsRequest $request)
    {
        Forum::create($request->except('_token'));
        return redirect()->route('forums.index');
    }

    public function edit($forum_id)
    {
        $forum = Forum::findOrFail($forum_id);
        return view('dashboard.configurations.forums.edit', compact('forum'));
    }

    public function update(ForumsRequest $request, $forum_id)
    {
        Forum::findOrFail($forum_id)->update($request->except('_token'));
        return redirect()->route('forums.index');
    }

    public function destroy($forum_id)
    {
        Forum::findOrFail($forum_id)->delete();
        return redirect()->route('forums.index');
    }
}
