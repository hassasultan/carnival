<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMedia extends Model
{
    use HasFactory;

    protected $table = 'productimages';
    
    protected $fillable = ['product_id', 'image'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
