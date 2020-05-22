<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    
    protected $fillable = [
        'id','name', 'email', 'password','avatar','role','approved_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function donasi(){
        return $this->hasMany('App\Donasi');
    }

    public function profilepelanggan(){
        return $this->hasMany('App\Pelanggan');
    }

    public function kontributor(){
        return $this->hasMany('App\Kontributor','id');
    }

    public function datadirikontributor(){
        return $this->hasMany('App\Kontributor');
    }

    public function pelanggan(){
        return $this->hasMany('App\Pelanggan','id');
    }

    public function post(){
        return $this->hasMany('App\Posts');
    }

}
