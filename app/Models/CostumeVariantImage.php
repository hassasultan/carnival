<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostumeVariantImage extends Model
{
    use HasFactory;

    protected $table = 'costume_variant_images';

    protected $fillable = ['costume_id', 'costume_variant_id', 'image'];

    // Define relationships if applicable
    public function costume()
    {
        return $this->belongsTo(Costume::class);
    }

    public function variant()
    {
        return $this->belongsTo(Variant::class, 'costume_variant_id');
    }
}
