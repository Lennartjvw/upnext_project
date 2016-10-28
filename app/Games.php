<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $fillable  = [
        'name',
        'release_date',
        'info',
        'developer'
    ];

    public function user() {

//        return $this->belongsTo('App\User');

        return $this->belongsTo(Games::class,
            'game_user',
            'game_id',
            'user_id');
    }
}
