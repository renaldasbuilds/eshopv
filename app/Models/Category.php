<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image_path',
        'description'
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
