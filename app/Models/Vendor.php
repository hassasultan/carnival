<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'package_id',
        'status',
        'name',
        'email',
        'phone',
        'logo',
        'address',
        'insta',
        'facebook',
        'youtube',
        'twitter',
        'tiktok',
        'wa_business_page',
        'linkedin',
        'continent',
        'short_description',
        'ecommerce',
        'events',
        'music',
        'appointment',
        'ad_space',
        'blogging',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function subvendor()
    {
        return $this->hasMany(SubVendor::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'user_id', 'user_id');
    }

    public function continent()
    {
        return $this->belongsTo(Region::class, 'continent');
    }
    public function region()
    {
        return $this->belongsTo(Region::class, 'continent');
    }

    public function gallery()
    {
        return $this->hasMany(SiteGallery::class, 'user_id', 'user_id');
    }

    public function carnivals()
    {
        return $this->belongsToMany(Carnival::class, 'pivot_carnival_mascamps', 'mascamp_id', 'carnival_id')
                    ->withTimestamps();
    }
}
