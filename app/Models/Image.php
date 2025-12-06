<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'product_id',
        'is_cover',
        'path',
        'format',
        'width',
        'height',
        'sort_order',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'is_cover'   => 'boolean',
        'width'      => 'integer',
        'height'     => 'integer',
        'sort_order' => 'integer',
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
