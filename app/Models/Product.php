<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'title', 'short_description', 'description', 'images', 'video', 'creator', 'tags', 'launch_date', 'slug', 'status'];
}
