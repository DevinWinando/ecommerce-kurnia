<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code',
        'name',
        'price',
        'qty',
        'category_id',
        'image',
        'is_active',
        'pos_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
