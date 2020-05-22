<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $fillable = ['id','nama_depan', 'nama_belakang', 'jenis_kelamin', 'alamat','no_telp'];

    protected $table = 'pelanggan'; 

      public function user(){
    	return $this->belongsToMany('App\User','id');
    }
    
}
