<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name','image','point_weight','user_id','class_id'];
    
}
