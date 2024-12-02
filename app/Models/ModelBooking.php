<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBooking extends Model
{
    use HasFactory;

    protected $table = 'model_bookings';

    protected $fillable = [
        'model_id',
        'status',
        'message',
        'email',
        'phone',
    ];

    public function model()
    {
        return $this->belongsTo(Model::class);
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }
}
