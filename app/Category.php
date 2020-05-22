<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['name', 'slug'];
	// field apa saja yang nanti diinsert ke database(name, slug)

    protected $table = 'category'; 
    // karena nama tabel tidak sesuai stndar (category seharusnya categories) maka harus dideklarasikan seperti ini dahulu

    public function posts(){
    	return $this->hasMany('App\Posts');
    }

    public function surat(){
        return $this->hasMany('App\Surat');
    }

    public function getRouteKeyName(){
    	return 'slug';
    }

    public function daftarbab(){
        return $this->hasMany('App\Daftarbab');
    }
}
