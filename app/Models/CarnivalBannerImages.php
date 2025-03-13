<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarnivalBannerImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'carnival_id',
        'image',
        'poster',
        'flyerNew',
        'btn_text',
        'btn_url',
    ];

    /**
     * Get the carnival that owns the image.
     */
    public function carnival()
    {
        return $this->belongsTo(Carnival::class);
    }
}
