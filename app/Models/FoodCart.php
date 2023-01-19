<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCart extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'food_id',
        'cart_id',
        'qty',
        'price'
    ];
}
