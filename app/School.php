<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class School extends Model
{
    public function user() {
        return $this->hasMany('App\User');
    }
}
