<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftarbabsurat extends Model
{
    protected $fillable = [ 'daftarsurat_id', 'indo_id', 'daftarbab_id', 'VerseID'];

    protected $table = 'daftarbabsurat'; 

    public function daftarbab(){
    	return $this->belongsTo('App\Daftarbab');
    }

    public function daftarsurat(){
    	return $this->belongsTo('App\DaftarSurat');
    }

    public function indo(){
    	return $this->belongsTo('App\Indo');
    }

}
