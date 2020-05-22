<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    protected $fillable = ['id', 'akun_gopay', 'jumlah_donasi'];
	// field apa saja yang nanti diinsert ke database(name, slug)

    protected $table = 'donasi'; 

    public function users(){
    	return $this->belongsToMany('App\User', 'id');
    }
}
