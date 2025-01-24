<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;

    protected $table = 'faqs';

    protected $fillable = [
        'modelable_type',
        'modelable_id',
        'question',
        'answer',
        'status',
    ];

    public function modelable()
    {
        return $this->morphTo();
    }
}
