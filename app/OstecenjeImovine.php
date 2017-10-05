<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class OstecenjeImovine extends Model {

    protected $table = 'ostecenjeimovines';
    public $fillable = ['id', 'idRef', 'narucilac', 'primalac', 'naziv', 'datum_prijema', 'Naziv', 'rn', 'stanje', 'uzrok', 'uzrok_datum', 'nacin_obav', 'nacin_obav_datum', 'nacin_resavanja', 'nacin_resavanja_datum'];

//    public function childs() {
////        return $this->hasMany('App\OstecenjeImovine','idRef','id');
//        return $this->hasMany('App\OstecenjeImovine',null,'id','idRef');
//    }
}














