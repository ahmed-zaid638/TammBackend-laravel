<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image', 'url'];

    public function getImageAttribute()
    {

        return asset('storage/' . $this->attributes['image']);
    }
}
