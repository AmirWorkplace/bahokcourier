<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'primary_email',
        'secondary_email',
        'primary_phone',
        'secondary_phone',
        'serial',
        'status',
    ];
}
