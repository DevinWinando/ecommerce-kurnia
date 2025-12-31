<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $fillable = [
        'pos_id',
        'name',
        'mobile',
        'email',
        'city',
        'country',
        'zip',
        'latitude',
        'longitude',
        'bistype',
        'bisname',
        'is_active',
    ];

    protected $casts = [
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
        'is_active' => 'boolean',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_warehouse')
            ->withPivot('qty')
            ->withTimestamps();
    }
}
