<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MusicImage extends Pivot
{
    protected $table = 'music_images';
}
