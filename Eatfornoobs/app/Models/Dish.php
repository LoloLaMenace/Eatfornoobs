<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Dish extends Model
{
    protected $fillable = [
        'title',
        'recipe',
        'created_by'
    ];
    public function favorites(): hasMany
    {
        return $this->hasMany(Favorite::class);
    }

    public function creator(): hasOne
    {
        return $this->hasOne(User::class);
    }
}
