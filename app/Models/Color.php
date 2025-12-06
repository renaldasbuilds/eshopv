<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'hex_code',
        'is_active',
        'sort_order',
        'description',
    ];

    protected $casts = [
        'is_active'  => 'boolean',
        'sort_order' => 'integer',
    ];  

    public function products() {
        return $this->hasMany(Product::class);
    }
}
