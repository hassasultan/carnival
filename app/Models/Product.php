<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'brand_id',
        'title',
        'slug',
        'category_id',
        'subcategory_id',
        'description',
        'old_price',
        'new_price',
        'sale',
        'status',
        'tags',
        'condition',
        'stock_condition',
        'discount',
        'facebook',
        'instagram',
        'youtube',
        'twitter',
        'tiktok',
        'pinterest',
        'linkedin',
        'image',
        'information',
        'reviews',
        'extra',
        'guarantee',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function variants()
    {
        return $this->belongsToMany(Variant::class)->withPivot('id', 'name', 'type', 'value', 'status');
    }
    public function product_variant()
    {
        return $this->hasMany(ProductVariant::class, 'product_id');
    }
    public function product_images()
    {
        return $this->hasMany(ProductVariantImage::class, 'product_id');
    }
    public function isAvailable()
    {
        return $this->stock_condition === 'In Stock';
    }

    public function media()
    {
        return $this->hasMany(ProductMedia::class);
    }
}
