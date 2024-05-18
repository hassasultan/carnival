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
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'head');
    }
}
