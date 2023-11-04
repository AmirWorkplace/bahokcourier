<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessingDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'serial',
        'title',
        'image',
        'short_description',
        'slug',
        'status'
    ];
}
