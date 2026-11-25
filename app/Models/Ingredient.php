<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = [
        'name',
        'unit'
    ];

    public function dishes()
    {
        return $this->belongsToMany(Dish::class, 'dish_ingredients')
                ->withPivot('quantity_per_table')
                ->withTimestamps();
    }

    public function supplier()
    {
        return $this->belongsToMany(Supplier::class);
    }
}
