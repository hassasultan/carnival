<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderShipping extends Model
{
    use HasFactory;
    protected $table = 'orders_shipping';
    protected $fillable = 
    [
        'order_id',
        'first_name_1',
        'last_name_1',
        'company_name_1',
        'email_address_1',
        'address_1',
        'city_1',
        'state1',
        'postal_code_1',
        'country1',
        'telephone_1',
        'fax_1',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class,'order_id');
    }
}
