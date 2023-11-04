<?php

namespace App\Http\Controllers\Admin;

use App\Helper\helperClass;
use App\Http\Controllers\Controller;
use App\Models\SubAreaSetup;
use Illuminate\Http\Request;

class SubAreaSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $path;
    public $table;
    public function __construct(){
        $this->path = 'sub-area-setup';
        $this->table = 'sub_area_setups';
    }
    public function index()
    {
        return helperClass::resourceDataView(SubAreaSetup::query(), ['title', 'serial'], null, $this->path);
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

        return helperClass::resourceDataStore($this->table, $request, ['main_area_id', 'title', 'serial', 'short_description', 'slug'], null, null, $this->path);
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

        return helperClass::resourceDataUpdate($this->table, $id, $request, ['main_area_id', 'title', 'serial', 'short_description', 'slug'], null, null, $this->path);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        return helperClass::resourceDataDelete($this->table, $request, $id, null);
    }
}
