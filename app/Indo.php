<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indo extends Model
{
    protected $fillable = [ 'daftarsurat_id','VerseID', 'AyahText', 'surat_indonesia'];

    protected $table = 'indo';

    public function daftarsurat(){
    	return $this->belongsTo('App\DaftarSurat');
    }

    public function daftarbabsurat(){
        return $this->hasMany('App\Daftarbabsurat');
    }
}
