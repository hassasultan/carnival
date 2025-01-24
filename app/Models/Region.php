<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'regions';

    protected $fillable = ['name', 'icon','placement'];
    public function countries()
    {
        return $this->hasMany(Country::class, 'region_id');
    }
}
