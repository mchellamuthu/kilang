<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institute extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['user_id','name','avatar','cover_pic','address','city','state','country','type'];

    public function classrooms()
    {
      return $this->hasMany(ClassRoom::class);
    }
    public function scopeSearchByKeyword($query, $keyword)
    {
        if ($keyword!='') {
            $query->where(function ($query) use ($keyword) {
                $query->where("name", "LIKE","%$keyword%")
                    ->orWhere("city", "LIKE", "%$keyword%")
                    ->orWhere("state", "LIKE", "%$keyword%")
                    ->orWhere("country", "LIKE", "%$keyword%");
            });
        }
        return $query;
    }
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
