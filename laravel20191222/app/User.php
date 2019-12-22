<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function skintypes()
    {
        return $this->hasMany(Skintype::class);
    }

    public function skintroubles()
    {
        return $this->hasMany(Skintrouble::class);
    }
}
