<?php

namespace App\Http\Controllers\Admin;

use App\Helper\helperClass;
use App\Http\Controllers\Controller;
use App\Models\SpecialFoodItems;
use Illuminate\Http\Request;

class SpecialFoodItemsController extends Controller
{
    
    // Display a listing of the resource.
    public function index()
    {
        return helperClass::resourceDataView(SpecialFoodItems::query(), ['name', 'serial'], ['image'], 'special-food-item');
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('admin.special-food-item.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate(['image'=> 'required|image', 'name'=> 'required', 'serial'=> 'required']);

        return helperClass::resourceDataStore('special_food_items', $request, ['name', 'serial'], ['image'], 'media/special_food_items/', 'special-food-item');
    }

    // Display the specified resource.
    public function show(string $id)
    {
        //
    }

    // Show the form for editing the specified resource.
    public function edit(string $id)
    {
        return helperClass::resourceDataEdit('special_food_items', $id, 'special-food-item');
    }

    // Update the specified resource in storage.
    public function update(Request $request, string $id)
    {
        $request->validate(['name'=> 'required', 'serial'=> 'required']);

        return helperClass::resourceDataUpdate('special_food_items', $id, $request, ['name', 'serial'], ['image'], 'media/special_food_items/', 'special-food-item');
    }

    // Remove the specified resource from storage.
    public function destroy(Request $request, string $id)
    {
        return helperClass::resourceDataDelete('special_food_items', $request, $id, ['image']);
    }

}
