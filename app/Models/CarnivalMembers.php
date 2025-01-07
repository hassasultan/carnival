<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarnivalMembers extends Model
{
    use HasFactory;

    protected $fillable = [
        'carnival_id',
        'first_name',
        'last_name',
        'email',
        'image',
        'phone',
        'address',
        'city',
        'state',
        'country',
    ];

    public function carnival()
    {
        return $this->belongsTo(Carnival::class);
    }

    public function getFullnameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
