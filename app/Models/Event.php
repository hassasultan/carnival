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
        'slug',
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
        'location',
        'booking_start_time_btn',
        'booking_starts_on_date',
        'booking_starts_on_time',
        'booking_end_time_btn',
        'booking_ends_on_date',
        'booking_ends_on_time',
        'passing_service_charge_btn',
        'refund_policies_btn',
        'refund_policy_id',
        'cancel_before',
        'refund_amount',
        'ticket_instructions_btn',
        'special_instructions',
        'tags_btn',
        'promotional_image',
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

    public function country()
    {
        // return $this->belongsTo(Country::class, 'venue', 'id');
        return $this->belongsTo(Country::class, 'venue', 'id')->withDefault();
    }
    public function images()
    {
        return $this->hasMany(EventImage::class);
    }
    public function tickets()
    {
        return $this->hasMany(EventTicket::class);
    }

    public function getPriceAttribute()
    {
        $firstTicket = $this->tickets()->orderBy('id', 'asc')->first();
        return $firstTicket ? $firstTicket->price : null;
    }

    public function getMinTicketPriceAttribute()
    {
        return $this->tickets()->min('price');
    }

    public function getMaxTicketPriceAttribute()
    {
        return $this->tickets()->max('price');
    }

    public function getStartDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('m/d/Y');
    }

    public function getEndDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('m/d/Y');
    }

    public function relatedEvents()
    {
        return $this->hasMany(Event::class, 'venue', 'venue')->where('id', '!=', $this->id);
    }

    public function carnivals()
    {
        return $this->belongsToMany(Carnival::class, 'pivot_carnival_events', 'event_id', 'carnival_id')
            ->withTimestamps();
    }

    public function orderItems()
    {
        return $this->morphMany(OrderItem::class, 'orderable');
    }
}
