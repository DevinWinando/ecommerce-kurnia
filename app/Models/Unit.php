<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'name',
        'short_name',
    ];

    // Define any relationships or methods related to the Unit model here
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
