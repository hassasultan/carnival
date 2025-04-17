<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsers extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'user_id',
        'logo',
        'description',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
