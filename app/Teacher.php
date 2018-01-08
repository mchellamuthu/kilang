<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['class_id','institute_id','permissions','user_id'];

    public function classroom()
    {
      return $this->belongsTo('App\ClassRoom','id','class_id');
    }
    public function user()
    {
      return $this->belongsTo('App\User','id','user_id');
    }
}
