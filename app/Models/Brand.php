<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';

    protected $fillable = ['title', 'logo', 'status'];
    public function products()
    {
        return $this->belongsToMany(Product::class,'brand_id');
    }
}
