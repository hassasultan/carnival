<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteGallery extends Model
{
    use HasFactory;
    protected $table = 'site_gallery';

    protected $fillable = [
        'user_id',
        'image',
        'album',
        'status',
    ];

    public function gellary_album()
    {
        return $this->belongsTo(GalleryAlbum::class, 'album', 'id');
    }
}
