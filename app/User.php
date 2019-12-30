<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    # one to one relationship
    public function post(){
        // get user_id by default
        return $this->hasOne('App\Post');
    }

    # one to many relationship
    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function roles(){

        return $this->belongsToMany('App\Role')->withPivot('created_at');

    }
}
