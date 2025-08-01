<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    // Define any relationships or methods related to the Category model here
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
