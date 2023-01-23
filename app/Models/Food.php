<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Food extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'foods';

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'image',
        'price'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'food_orders')->withPivot(
            'food_id',
            'order_id',
            'qty',
            'price'
        );
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
