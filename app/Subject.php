<?php

namespace App;

use App\Keystage;
use App\School;
use App\Topic;
use App\Year;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Subject extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'name',
      'school_id',
      'year_id',
      'keystage_id',
    ];

    public function topic() {
        return $this->hasMany('App\Topic');
    }

    public function keystage() {
        return $this->belongsTo('App\Keystage');
    }
    public function school() {
        return $this->belongsTo('App\School');
    }

    public function year() {
        return $this->belongsTo('App\Year');
    }
}
