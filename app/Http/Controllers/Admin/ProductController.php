<?php

namespace App\Http\Controllers\Admin;

use App\Helper\helperClass;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return helperClass::resourceDataView(Product::query(), ['name', 'title', 'tags'], null, 'product');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate(['name'=> 'required', 'images'=> 'required', 'title'=> 'required', 'short_description'=> 'required', 'description'=> 'required', 'tags'=>
        'required']);

        return helperClass::resourceDataStore('products', $request, ['name', 'title', 'short_description', 'description', 'video', 'creator', 'tags', 'launch_date', 'slug'], null, 'media/products/', 'product', ['images']);
    }

    // Display the specified resource.
    public function show(string $id)
    {
        //
    }

    // Show the form for editing the specified resource.
    public function edit(string $id)
    {
        return helperClass::resourceDataEdit('products', $id, 'product');
    }

    // Update the specified resource in storage.
    public function update(Request $request, string $id)
    {
        $request->validate(['name'=> 'required', 'title'=> 'required', 'short_description'=> 'required', 'description'=> 'required', 'tags'=>
        'required']);

        return helperClass::resourceDataUpdate('products', $id, $request, ['name', 'title', 'short_description', 'description', 'video', 'creator', 'tags', 'launch_date', 'slug'], null, 'media/products/', 'product', ['images']);
    }

    // Remove the specified resource from storage.
    public function destroy(Request $request, string $id)
    {
        return helperClass::resourceDataDelete('products', $request, $id, null, ['images']);
    }
}
