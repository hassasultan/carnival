<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'country';

    protected $fillable = ['name', 'region_id'];

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
    public function cities()
    {
        return $this->hasMany(City::class, 'country_id');
    }
    public function events()
    {
        return $this->hasMany(Event::class, 'venue');
    }
}
