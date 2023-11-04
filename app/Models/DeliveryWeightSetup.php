<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryWeightSetup extends Model
{
    use HasFactory;
    protected $fillable = [
        'weight',
        'attribute',
        'unit',
        'serial',
        'status',
    ];
}
