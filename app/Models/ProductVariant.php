<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $table = 'product_variant';

    protected $fillable = ['product_id', 'name', 'variant_id', 'type', 'value', 'status', 'price'];
    public function product_image()
    {
        return $this->hasMany(ProductVariantImage::class);
    }
}
