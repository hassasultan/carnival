<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Music extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'musics';

    protected $fillable = [
        'artiste_name',
        'real_name',
        'producer',
        'writer',
        'song_title',
        'release_date',
        'video',
        'images',
        'music_file',
        'country',
        'region',
        'carnival',
        'cover_image',
        'show_size_requirement',
        'for_sale',
        'price',
    ];

    protected $casts = [
        'release_date' => 'date',
        'images' => 'array',
    ];

    protected $dates = ['deleted_at'];

    public function setImagesAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['images'] = json_encode($value);
        }
    }

    public function getImagesAttribute($value)
    {
        return json_decode($value, true);
    }

    public function images()
    {
        return $this->belongsToMany(MusicImage::class)->withTimestamps();
    }
}
