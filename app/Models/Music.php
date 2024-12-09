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
        'user_id',
        'artiste_name',
        'real_name',
        'producer',
        'writer',
        'song_title',
        'release_date',
        'images',
        'music',
        'country',
        'region',
        'event_id',     // carnival
        'cover_image',
        'for_sale',
        'price',
    ];

    protected $casts = [
        'release_date' => 'date',
        'images' => 'array',
    ];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
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

    public function imagesRelation()
    {
        return $this->hasMany(MusicImage::class, 'music_id');
    }
}
