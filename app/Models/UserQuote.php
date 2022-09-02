<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuote extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'username',
        'email',
        'company',
        'contact',
        'country',
        'address',
        'enquiry'
    ];

    protected $casts = [
        'product_id' => 'integer'
    ];

    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
