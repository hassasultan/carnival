<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MusicImage extends Pivot
{
    protected $table = 'music_images';

    protected $fillable = [
        'music_id',
        'image',
    ];

    public function music()
    {
        return $this->belongsTo(Music::class);
    }
}
