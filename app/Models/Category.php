<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'package_id',
        'icon',
        'type',
        'title',
        'slug',
        'description',
        'status',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // All subcategories of single category
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    // All features of single category
    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    // All products of this category through subcategories
    public function products()
    {
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

    // All costumes of this category through subcategories
    public function costumes()
    {
        return $this->hasManyThrough(Costume::class, Subcategory::class);
    }
}
