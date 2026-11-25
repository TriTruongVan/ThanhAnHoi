<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DishIngredient extends Model
{
    protected $fillable = [
        'dish_id',
        'ingredient_id',
        'quantity_per_table'
    ];
}
