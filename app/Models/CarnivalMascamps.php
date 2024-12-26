<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarnivalMascamps extends Model
{
    use HasFactory;

    protected $table = 'pivot_carnival_mascamps';

    protected $fillable = ['carnival_id','mascamp_id','is_model'];

     public function carnival()
     {
         return $this->belongsTo(Carnival::class, 'carnival_id');
     }

     public function mascamp()
     {
         return $this->belongsTo(Vendor::class, 'mascamp_id');
     }
}
