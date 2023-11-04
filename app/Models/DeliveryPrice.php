<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryPrice extends Model
{
    use HasFactory;
    protected $fillable = ['weight_id', 'charge_id', 'price', 'status'];

    public function delivery_weights(){
        return $this->hasOne(DeliveryWeightSetup::class, 'id', 'weight_id');
    }
}
