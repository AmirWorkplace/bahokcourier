<?php

namespace App\Http\Controllers\Admin;

use App\Helper\helperClass;
use App\Http\Controllers\Controller;
use App\Models\ShowcaseItem;
use Illuminate\Http\Request;

class ShowcaseItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return helperClass::resourceDataView(ShowcaseItem::query(), ['title', 'serial'], ['thumbnail'], 'showcase-item');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.showcase-item.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate(['title'=> 'required', 'short_description'=> 'required', 'thumbnail'=> 'required', 'serial'=> 'required']);

        return helperClass::resourceDataStore('showcase_items', $request, ['title', 'short_description', 'serial', 'slug'], ['thumbnail'], 'media/showcase_items/', 'showcase-item');
    }

    // Display the specified resource.
    public function show(string $id)
    {
        //
    }

    // Show the form for editing the specified resource.
    public function edit(string $id)
    {
        return helperClass::resourceDataEdit('showcase_items', $id, 'showcase-item');
    }

    // Update the specified resource in storage.
    public function update(Request $request, string $id)
    {
        $request->validate(['title'=> 'required', 'short_description'=> 'required', 'serial'=> 'required']);

        return helperClass::resourceDataUpdate('showcase_items', $id, $request, ['title', 'short_description', 'serial', 'slug'], ['thumbnail'], 'media/showcase_items/', 'showcase-item');
    }

    // Remove the specified resource from storage.
    public function destroy(Request $request, string $id)
    {
        return helperClass::resourceDataDelete('showcase_items', $request, $id, null);
    }
}
