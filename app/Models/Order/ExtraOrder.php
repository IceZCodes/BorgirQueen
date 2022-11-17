<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraOrder extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'order_id',
        'extra_id',
        'extra_quantity',
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }
    public function extra() {
        return $this->belongsTo(Extra::class);
    }
}
