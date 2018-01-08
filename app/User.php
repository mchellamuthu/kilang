<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Crypt;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->title} {$this->first_name} {$this->last_name}";
    }
    // public function getIdAttribute($value)
    // {
    //     return  Crypt::encryptString($value);
    // }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','prof_pic','is_verified','first_name','last_name', 'email', 'password','status','user_code','qr_password','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
