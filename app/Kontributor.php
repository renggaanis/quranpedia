<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Kontributor extends Model
{
    protected $fillable = ['id', 'nama_depan', 'nama_belakang', 'alamat', 'no_telp','no_ktp', 'jenis_kelamin'];

    protected $table = 'kontributor';
     
    public function user(){
    	return $this->belongsToMany('App\User');
    }
}
