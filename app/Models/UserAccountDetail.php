<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccountDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'stripe_account_id',
        'bank_name',
        'account_holder_name',
        'account_number',
        'ifsc_code',
        'swift_code',
        'paypal_email',
        'upi_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
