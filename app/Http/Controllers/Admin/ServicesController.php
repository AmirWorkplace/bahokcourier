<?php

namespace App\Http\Controllers\Admin;

use App\Helper\helperClass;
use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $path;
    public $table;
    public function __construct(){
        $this->path = 'services';
        $this->table = 'services';
    }
    public function index()
    {
        return helperClass::resourceDataView(Services::query(), ['title', 'serial'], ['image'], $this->path);
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
            'short_description'=> 'required',
            'image'=> 'required|image',
        ]);

        return helperClass::resourceDataStore($this->table, $request, ['title', 'serial', 'short_description', 'slug'], ['image'], "media/{$this->path}/", $this->path);
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
            'short_description'=> 'required',
            'image'=> 'required|image',
        ]);

        return helperClass::resourceDataUpdate($this->table, $id, $request, ['title', 'serial', 'short_description', 'slug'], ['image'], "media/{$this->path}/", $this->path);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        return helperClass::resourceDataDelete($this->table, $request, $id, ['image']);
    }
}
