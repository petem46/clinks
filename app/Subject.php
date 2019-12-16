<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Subject extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'name',
      'intent',
    ];

    public function topic() {
        return $this->hasMany('App\Topic');
    }

    // public function keystage() {
    //     return $this->belongsTo('App\Keystage');
    // }

    public function school() {
        return $this->belongsToMany('App\School');
    }

    public function year() {
        return $this->belongsToMany('App\Year');
    }

}
