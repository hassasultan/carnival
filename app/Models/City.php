<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'city';

    protected $fillable = ['name', 'country_id', 'airport', 'hotel', 'event'];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
