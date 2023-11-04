<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainAreaSetup extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'serial',
        'short_description',
        'slug',
        'status'
    ];

    public function sub_areas(){
        return $this->hasMany(SubAreaSetup::class, 'main_area_id');
    }
}
