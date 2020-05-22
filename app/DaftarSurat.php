<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarSurat extends Model
{
	protected $fillable = ['index', 'surat_indonesia', 'surat_arab', 'arti', 'jumlah_ayat', 'tempat_turun', 'urutan_pewahyuan'];

    protected $table = 'daftarsurat';

    public function surat(){
    	return $this->hasMany('App\Surat');
    }

    public function indo(){
    	return $this->hasMany('App\Indo');
    }

    public function quran(){
    	return $this->hasMany('App\Quran');
    }

    public function daftarbabsurat(){
        return $this->hasMany('App\Daftarbabsurat');
    }
}
