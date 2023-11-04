<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubAreaSetup extends Model
{
    use HasFactory;
    protected $fillable = [
        'main_area_id',
        'title',
        'serial',
        'short_description',
        'slug',
        'status'
    ];
}
