<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function foods()
    {
        return $this->belongsToMany(Food::class, 'food_carts')->withPivot(
            'food_id',
            'cart_id',
            'qty',
            'price'
        );
    }
}
