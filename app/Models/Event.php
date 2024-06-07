<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'category_id',
        'package_id',
        'name',
        'description',
        'status',
        'total_no_of_tickets',
        'eventType',
        'start_date',
        'start_time',
        'end_date',
        'end_time',
        'dress_code',
        'all_day',
        'banner',
        'promotional_Video',
        'additional_images',
        'venue',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
