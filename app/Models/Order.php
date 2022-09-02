<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'product_id',
        'phone_no',
        'delivery_address',
        'any_note',
        'order_status',
        'latitude',
        'longitude',
        'driver_id',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'driver_id' => 'integer',
        'product_id' => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
