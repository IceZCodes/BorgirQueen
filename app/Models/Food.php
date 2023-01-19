<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'image',
        'price'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'food_orders');
    }
    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'food_carts')->withPivot(
            'food_id',
            'cart_id',
            'qty',
            'price'
        );
    }
}
