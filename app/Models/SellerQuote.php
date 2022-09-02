<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerQuote extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_name',
        'product_model',
        'product_price',
        'username',
        'email',
        'company',
        'contact',
        'country',
        'address',
        'enquiry'
    ];
}
