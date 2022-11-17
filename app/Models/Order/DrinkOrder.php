<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrinkOrder extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'order_id',
        'drink_id',
        'drink_quantity',
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }
    public function drink() {
        return $this->belongsTo(Drink::class);
    }
}
