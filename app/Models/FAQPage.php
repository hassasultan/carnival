<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQPage extends Model
{
    use HasFactory;

    protected $table = 'faq_pages';

    protected $fillable = [
        'page',
        'question',
        'answer',
        'status',
    ];
}
