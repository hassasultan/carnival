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
        'description',
        'slug',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'head');
    }

    public function mascamps()
    {
        return $this->belongsToMany(Vendor::class, 'pivot_carnival_mascamps', 'carnival_id', 'mascamp_id')
                    ->withTimestamps();
    }
}
