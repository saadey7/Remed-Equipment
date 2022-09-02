<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;
    protected $fillable =[
        'product_id',
        'product_image',
    ];

    protected $casts = [
        'product_id' => 'integer'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function getProductImageAttribute($value)
    {
        if($value == null)
        {
           return null;
        }
        else
        {
            return asset('/assets/images/productimages/' . $value);
        }

    }
}
