<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cosmeinfo extends Model
{

    /**
     * 紐づいたUserの情報を取得するメソッド
     *
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * 紐づいたSkintypeの情報を取得するメソッド
     *
     */
    public function skintype()
    {
        return $this->belongsTo('App\Skintype');
    }
}
