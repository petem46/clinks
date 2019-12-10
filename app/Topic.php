<?php

namespace App;

use App\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;


class Topic extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'name',
      'week',
      'description',
      'subject_id',
    ];

    public function subject() {
        return $this->belongsTo('App\Subject');
    }
}
