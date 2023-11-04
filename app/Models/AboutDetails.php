<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'title',
        'image',
        'short_description',
        'description',
    ];
}
