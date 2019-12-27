<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy_place extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
