<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupClass extends Model
{
  protected $fillable = ['class_id','group_id','user_id'];

  public function group()
  {
    return $this->belongsTo('App\ClassGroup','id','group_id');
  }

  public function class()
  {
    return $this->belongsTo('App\ClassRoom','id','class_id');
  }

}
