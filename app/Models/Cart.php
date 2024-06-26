<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_code',
        'price',
        'tax',
        'total',
        'discount',
        'Net',
        'user_id',
    ];
}
