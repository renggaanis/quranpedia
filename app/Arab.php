<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arab extends Model
{
    protected $fillable = [ 'daftarsurat_id','VerseID', 'AyahText', 'surat_indonesia', 'audio'];

    protected $table = 'quran';

    public function daftarsurat(){
    	return $this->belongsTo('App\DaftarSurat');
    }
}
