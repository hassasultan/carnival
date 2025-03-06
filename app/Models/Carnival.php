<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carnival extends Model
{
    use HasFactory;

    protected $fillable = [
        'unique_id',
        'head',     // user id
        'name',
        'link',
        'start_date',
        'end_date',
        'region',
        'region_id',
        'country_id',
        'city_id',
        'description',
        'slug',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'head');
    }
    public function regions()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function mascamps()
    {
        return $this->belongsToMany(Vendor::class, 'pivot_carnival_mascamps', 'carnival_id', 'mascamp_id')
                    ->withTimestamps();
    }

    public function members()
    {
        return $this->hasMany(CarnivalMembers::class);
    }
    public function country_tabs()
    {
        return $this->hasMany(EventsCountryTab::class)->orderBy('placement', 'asc');
    }
    public function images()
    {
        return $this->hasMany(CarnivalImages::class);
    }
    public function banners()
    {
        return $this->hasMany(CarnivalBannerImages::class);
    }
    public function flyers()
    {
        return $this->hasMany(CarnivalFlyerImages::class);
    }
}
