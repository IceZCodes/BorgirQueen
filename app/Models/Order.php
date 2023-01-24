<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'date',
        'time',
        'address',
        'shipping_type',
        'shipping_price',
        'payment_type',
        'notes',
        'status',
        'total_price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function foods()
    {
        return $this->belongsToMany(Food::class, 'food_orders')->withPivot(
            'food_id',
            'order_id',
            'qty',
            'price'
        );
    }
}
