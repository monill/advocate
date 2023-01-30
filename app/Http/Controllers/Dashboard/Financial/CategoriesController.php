<?php

namespace App\Http\Controllers\Dashboard\Financial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Financial\CategoriesRequest;
use App\Models\FinancialCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $categories = DB::table('financial_categories')->select('id', 'name')->get();
        return view('dashboard.financial.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.financial.categories.create');
    }

    public function store(CategoriesRequest $request)
    {
        FinancialCategory::create($request->except('_token'));
        return redirect()->route('categories.index');
    }

    public function edit($category_id)
    {
        $category = FinancialCategory::findOrFail($category_id);
        return view('dashboard.financial.categories.edit', compact('category'));
    }

    public function update(CategoriesRequest $request, $category_id)
    {
        FinancialCategory::findOrFail($category_id)->update($request->except('_token'));
        return redirect()->route('categories.index');
    }

    public function destroy($category_id)
    {
        FinancialCategory::findOrFail($category_id)->delete();
        return redirect()->route('categories.index');
    }
}
