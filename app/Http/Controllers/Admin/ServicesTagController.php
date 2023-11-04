<?php

namespace App\Http\Controllers\Admin;

use App\Helper\helperClass;
use App\Http\Controllers\Controller;
use App\Models\ServicesTag;
use Illuminate\Http\Request;

class ServicesTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $path;
    public $table;
    public function __construct(){
        $this->path = 'services-tag';
        $this->table = 'services_tags';
    }
    public function index()
    {
        return helperClass::resourceDataView(ServicesTag::query(), ['title', 'serial'], null, $this->path);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.{$this->path}.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required',
            'serial'=> 'required', 
        ]);

        return helperClass::resourceDataStore($this->table, $request, ['title', 'serial', 'slug'], null, null, $this->path);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return helperClass::resourceDataEdit($this->table, $id, $this->path);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=> 'required',
            'serial'=> 'required', 
        ]);

        return helperClass::resourceDataUpdate($this->table, $id, $request, ['title', 'serial', 'slug'], null, null, $this->path);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        return helperClass::resourceDataDelete($this->table, $request, $id, null);
    }
}
