<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        'user_id',
        'dish_id',
    ];

    public function user(): hasOne
    {
        return $this->hasOne(User::class);
    }

    public function recipe(): hasOne
    {
        return $this->hasOne(Dish::class);
    }
}
