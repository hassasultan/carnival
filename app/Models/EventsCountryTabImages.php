<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsCountryTabImages extends Model
{
    use HasFactory;
    protected $table = 'events_country_tab_images';

    protected $fillable = ['events_country_tab_id', 'file', 'file_type'];

    public function eventCountryTab()
    {
        return $this->belongsTo(EventsCountryTab::class, 'events_country_tab_id');
    }
}
