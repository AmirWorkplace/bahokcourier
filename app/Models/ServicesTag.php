<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesTag extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'serial', 'slug', 'status'];
}
