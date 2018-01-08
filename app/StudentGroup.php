<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class StudentGroup extends Model
{
    use SoftDeletes;
    protected $fillable = ['group_name','class_id','students','institute_id'];

    public function classroom()
    {
       return $this->belongsTo('App\ClassRoom','id','class_id');
    }

}
