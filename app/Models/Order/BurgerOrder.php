<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BurgerOrder extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'order_id',
        'burger_id',
        'burger_quantity',
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }
    public function burger() {
        return $this->belongsTo(Burger::class);
    }
}
