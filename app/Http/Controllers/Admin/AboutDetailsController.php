<?php

namespace App\Http\Controllers\Admin;

use App\Helper\helperClass;
use App\Http\Controllers\Controller;
use App\Models\AboutDetails;
use Illuminate\Http\Request;

class AboutDetailsController extends Controller
{
    //Display a listing of the resource.
    public function index()
    {
        $data = AboutDetails::latest('updated_at')->first();
        return view('admin.about-details.edit', compact('data'));
    }

    //Show the form for creating a new resource.
    public function create(){}

    //Store a newly created resource in storage.
    public function store(Request $request){}

    //Display the specified resource.
    public function show(string $id){}

    //Show the form for editing the specified resource.
    public function edit(string $id){}

    //Update the specified resource in storage.
    public function update(Request $request, string $id)
    {
        $request->validate([
           'title' => 'required',
           'short_description' => 'required',
        ]);

        $data = AboutDetails::latest('updated_at')->first();

        if(is_null($data)) $data = new AboutDetails();

        return helperClass::resourceDataSave($data, $request, 
        [
           'heading',
           'title',
           'short_description', 
           'description', 
       ], [
           'image', 
       ], 'media/about-details/');
    }

    
    // Remove the specified resource from storage.
    public function destroy(string $id){}
}