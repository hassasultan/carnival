<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersBilling extends Model
{
    use HasFactory;
    protected $table = 'orders_billing';
    protected $fillable = 
    [
        'order_id',
        'first_name',
        'last_name',
        'company_name',
        'address',
        'email_address',
        'city',
        'state',
        'postal_code',
        'country',
        'telephone',
        'fax',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class,'order_id');
    }
}
