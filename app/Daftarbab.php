<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftarbab extends Model
{
	protected $fillable = ['category_id', 'namasubbab', 'sub'];
	// field apa saja yang nanti diinsert ke database(name, slug)

    protected $table = 'daftarbab'; 
    
    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function daftarsurat(){
    	return $this->belongsTo('App\DaftarSurat');
    }

    public function daftarbabsurat(){
    	return $this->hasMany('App\Daftarbabsurat');
    }

}
