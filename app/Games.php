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

        return $this->belongsTo('App\User');

    }
}
