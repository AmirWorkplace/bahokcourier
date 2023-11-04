<?php

namespace App\Http\Controllers\Admin;

use App\Helper\helperClass;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
  
class SliderController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
       return helperClass::resourceDataView(Slider::query(), ['heading', 'title'], ['image'], 'slider');
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('admin.slider.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate(['image' => 'required|image', 'title'=> 'required']);

        return helperClass::resourceDataStore('sliders', $request, ['heading', 'title'], ['image'], 'media/slider/', 'slider');
    }

    // Display the specified resource.
    public function show(string $id)
    {
    }

    // Show the form for editing the specified resource.
    public function edit(string $id)
    {
        return helperClass::resourceDataEdit('sliders', $id, 'slider');
    }

    // Update the specified resource in storage.
    public function update(Request $request, string $id)
    {
        $request->validate(['title'=> 'required']);

        return helperClass::resourceDataUpdate('sliders', $id, $request, ['heading', 'title'], ['image'], 'media/slider/', 'slider');
    }

    // Remove the specified resource from storage.
    public function destroy(Request $request, string $id)
    {
        return helperClass::resourceDataDelete('sliders' ,$request, $id, ['image']);
    }
}
