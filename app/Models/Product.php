<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_name',
        'product_model',
        'product_price',
        'product_category',
        'product_short_description',
        'product_long_description'
    ];

}
