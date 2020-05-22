<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = ['judul', 'content', 'gambar', 'slug', 'users_id'];

     public function users(){
    	return $this->belongsTo('App\User');
    }
}
