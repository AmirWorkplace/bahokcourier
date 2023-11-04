<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutFaq extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'serial',
        'short_description',
        'status'
    ];
}
