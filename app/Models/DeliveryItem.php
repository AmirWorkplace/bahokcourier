<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'qty',
        'time',
        'serial',
        'status',
    ];

    public function delivery_prices(){
        return $this->hasMany(DeliveryPrice::class, 'charge_id')->with('delivery_weights');
    }
}
