<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'category'
    ];

    public function getImageAttribute($value)
    {
        if($value == null)
        {
           return null;
        }
        else
        {
            return asset('/assets/images/category/' . $value);
        }

    }
}
