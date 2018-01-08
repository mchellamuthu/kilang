<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['class_id','institute_id','user_id'];
    public function User()
    {
      return $this->belongsTo(User::class);
    }
    public function classroom()
    {
      return $this->belongsTo(ClassRoom::class);
    }

    public function points()
    {
      return $this->hasMany('App\StudentPoint');
    }

}
