<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassRoom extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['class_name','avatar','class_teacher','status','user_id','institute_id'];
    protected $table = 'class_rooms';
    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function students()
    {
        return $this->hasMany('App\Student', 'class_id', 'id');
    }
    public function skills()
    {
        return $this->hasMany('App\Skill', 'class_id', 'id');
    }

    public function groups()
    {
        return $this->hasMany('App\StudentGroup', 'class_id', 'id');
    }
}
