<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    const UPDATED_AT = null;
    const CREATED_AT = null;

    public function carts()
    {
        return $this->belongsToMany(Basket::class)->withPivot('quantity');
    }
}
