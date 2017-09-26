<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Neusag extends Model
{
    public $fillable = ['datum','idRef','kupac_poreklo','provera_poreklo','proces_poreklo','neusag_std1','neusag_std2','neusag_std3','neusag_std4','opis','uzrok'];

    public function childs() {
        return $this->hasMany('App\Neusag',null,'id','datum','idRef','kupac_poreklo','provera_poreklo','proces_poreklo','neusag_std1','neusag_std2','neusag_std3','neusag_std4','opis','uzrok') ;
    }

    public function korektivnamera(){
        return $this->belongsTo('App\KorektivnaMera', 'id', 'client_id');
    }

}
