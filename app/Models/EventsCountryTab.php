<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsCountryTab extends Model
{
    use HasFactory;
    protected $table = 'events_country_tabs';

    protected $fillable = ['carnival_id', 'country_id', 'city_id', 'tab', 'file', 'file_type', 'content', 'status'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function carnival()
    {
        return $this->belongsTo(Carnival::class);
    }
    
    public function faqs()
    {
        return $this->morphMany(FAQ::class, 'modelable');
    }
}
