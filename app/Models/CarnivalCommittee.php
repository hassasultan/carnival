<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarnivalCommittee extends Model
{
    use HasFactory;
    
    protected $table = 'carnival_committee';

    protected $fillable = [
        'user_id',
    ];
}
