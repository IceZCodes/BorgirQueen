<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Burger extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'image',
        'price'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function burgerOrder() {
        return $this->hasMany(Burger::class);
    }
}
