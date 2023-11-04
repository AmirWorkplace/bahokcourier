<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialFoodItems extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'serial', 'status'];
}
