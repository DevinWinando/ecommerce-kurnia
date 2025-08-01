<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['product_id', 'user_id', 'qty'];

    /**
     * Get the product associated with the cart item.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the user who owns the cart.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
