<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\metadata;
use Illuminate\Http\Request;

class pageSettingController extends Controller
{
    //
    function index()
    {
        $pageData = halaman::orderBy('judul', 'asc')->get();
        return view('dashboard.pagesetting.index')->with('pageData', $pageData);
    }

    function update(Request $request)
    {
        metadata::updateorCreate(['meta_key' => 'page_about'], ['meta_value' => $request->page_about]);
        metadata::updateorCreate(['meta_key' => 'page_interest'], ['meta_value' => $request->page_interest]);
        metadata::updateorCreate(['meta_key' => 'page_award'], ['meta_value' => $request->page_award]);
        return redirect()->route('pagesetting.index')->with('success', 'Successfully update data');
    }
}
