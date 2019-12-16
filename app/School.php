<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class School extends Model
{
    public function user() {
        return $this->hasMany('App\User');
    }

    public function subject() {
        return $this->belongsToMany('App\Subject');
    }

    public function topic() {
        return $this->belongsToMany('App\Topic');
    }
}
