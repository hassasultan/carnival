<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostumeVariant extends Model
{
    use HasFactory;

    protected $table = 'costume_variant';

    protected $fillable = ['costume_id', 'variant_id', 'value', 'status'];

}
