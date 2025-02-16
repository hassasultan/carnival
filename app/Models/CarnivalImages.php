<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarnivalImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'carnival_id',
        'image'
    ];

    /**
     * Get the carnival that owns the image.
     */
    public function carnival()
    {
        return $this->belongsTo(Carnival::class);
    }
}
