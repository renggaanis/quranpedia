<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $fillable = ['surat_indonesia','daftarsurat_id', 'ayat', 'text'];
     protected $table = 'surat'; 
    // protected $table = 'surat';
    public function daftarsurat(){
    return $this->belongsTo('App\daftarsurat');
}
}