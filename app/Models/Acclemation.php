<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acclemation extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'username',
        'title',
        'description',
        'status',
    ];
}
