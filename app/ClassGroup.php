<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ClassGroup extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['group_name','group_head','institute_id','user_id'];

    public function classes()
    {
      return $this->hasMany('App\GroupClass','group_id','id');
    }
}
