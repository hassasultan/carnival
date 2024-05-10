<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'product_variant_id',
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function product_variant()
    {
        return $this->hasMany(ProductVariant::class,'product_id');
    }
}