<?php

namespace App\Http\Controllers\Admin;

use App\Helper\helperClass;
use App\Http\Controllers\Controller;
use App\Models\DeliveryItem;
use App\Models\DeliveryPrice;
use Illuminate\Http\Request;

class DeliveryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $path;
    public $table;
    public function __construct(){
        $this->path = 'delivery-item';
        $this->table = 'delivery_items';
    }
    public function index()
    {
        return helperClass::resourceDataView(DeliveryItem::query(), ['title', 'serial'], null, $this->path);
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
            'weight_ids'=> 'required',
            'title'=> 'required',
            'serial'=> 'required', 
        ]);

        $delivery_item = DeliveryItem::create([
            'title' => $request->title,
            'qty' => $request->qty,
            'time' => $request->time,
            'serial' => $request->serial,
            'status'=> true
        ]);


        foreach($request->weight_ids as $weight ){
            $_weight = json_decode($weight);

            $delivery_price = [
                'charge_id'=> $delivery_item->id,
                'weight_id'=> $_weight->id,
                'price'=> $request["price_{$_weight->id}"],
                'status'=> true
            ];

            DeliveryPrice::create($delivery_price);
        }

        return redirect()->route("admin.{$this->path}.index")->withSuccessMessage('Delivery Price Item Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DeliveryItem::findOrFail($id);
        $delivery_item = DeliveryItem::with('delivery_prices')->where('status', true)->where('id', $id)->first();

        return view("admin.{$this->path}.edit", compact('data', 'delivery_item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $data = DeliveryItem::findOrFail($id);
        $delivery_item = DeliveryItem::with('delivery_prices')->where('status', true)->where('id', $id)->first();

        $weight_ids = [];  
        foreach($delivery_item->delivery_prices as $delivery_price){
            $weight_ids[] = $delivery_price->delivery_weights->id;
        }

        return view("admin.{$this->path}.edit", compact('data', 'delivery_item', 'weight_ids'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'weight_ids'=> 'required',
            'title'=> 'required',
            'serial'=> 'required', 
        ]);

        $delivery_item = DeliveryItem::findOrFail($id);
        $delivery_item->title = $request->title;
        $delivery_item->qty = $request->qty;
        $delivery_item->time = $request->time;
        $delivery_item->serial = $request->serial;

        $delivery_item->save();
        $delete_delivery_price_ids = DeliveryPrice::select('id')->where('charge_id', $delivery_item->id)->get()->pluck('id')->toArray();
        DeliveryPrice::whereIn('id', $delete_delivery_price_ids)->delete();


        foreach($request->weight_ids as $weight ){
            $_weight = json_decode($weight);

            $delivery_price = [
                'charge_id'=> $delivery_item->id,
                'weight_id'=> $_weight->id,
                'price'=> $request["price_{$_weight->id}"],
                'status'=> true
            ];


            DeliveryPrice::create($delivery_price);

        }

        return redirect()->route("admin.{$this->path}.index")->withSuccessMessage('Delivery Price Item Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        return helperClass::resourceDataDelete($this->table, $request, $id, null);
    }
}
