<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class SubVendor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'vendor_id',
        'events',
        'music',
        'appointment',
        'ad_space',
        'blogging',
        'ecommerce',
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

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'user_id', 'user_id');
    }

    public function continent()
    {
        return $this->belongsTo(Role::class, 'continent');
    }
    public function region()
    {
        return $this->belongsTo(Region::class, 'continent');
    }

    public function package()
    {
        return $this->hasOneThrough(
            Package::class,
            Vendor::class,
            'id',
            'id',
            'vendor_id',
            'package_id'
        );
    }
}
