<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'is_active',
        'is_featured',
        'price_cents',
        'price_discount',
        'stock',
        'category_id',      // belongsTo -> Category
        'color_id',         // belongsTo -> Color
        'material_id'       // belongsTo -> Material
    ];

    protected $casts = [
        'is_active'     => 'boolean',
        'is_featured'   => 'boolean',
        'price_cents'   => 'integer',
        'price_discount'=> 'integer',
        'stock'         => 'integer',

        'category_id' => 'integer',
        'color_id'    => 'integer',
        'material_id' => 'integer',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getFinalPrice(): int { 
        return ($this->price_discount > 0) 
            ? $this->price_discount
            : $this->price_cents;
    }

    // ryšiai
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function color() {
        return $this->belongsTo(Color::class);
    }
    public function material() {
        return $this->belongsTo(Material::class);
    }
    public function images() {
        return $this->hasMany(Images::class);
    }
    public function coverImage() {
        return $this->hasOne(Image::class)
            ->where('is_cover', true);
    }
}
