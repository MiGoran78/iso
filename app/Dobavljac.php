<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dobavljac extends Model {

    public $fillable = [
        'id', 'idRef', 'dobavljac_tip', 'dobavljac', 'ulica', 'mesto', 'zemlja', 'kontakt1', 'kontakt2', 'telefon1', 'telefon2',
        'sert_1', 'sert_2', 'sert_3', 'sert_4', 'sert_5', 'sert_6', 'sert_7', 'sert_8',
        'sert_br_1', 'sert_br_2', 'sert_br_3', 'sert_br_4', 'sert_br_5', 'sert_br_6', 'sert_br_7', 'sert_br_8',
        'sert_rok_1', 'sert_rok_2', 'sert_rok_3', 'sert_rok_4', 'sert_rok_5', 'sert_rok_6', 'sert_rok_7', 'sert_rok_8'
    ];

    public function childs() {
        return $this->hasMany('App\Dobavljaci',null,
            'id', 'idRef', 'dobavljac_tip', 'dobavljac', 'ulica', 'mesto', 'zemlja', 'kontakt1', 'kontakt2', 'telefon1', 'telefon2',
            'sert_1', 'sert_2', 'sert_3', 'sert_4', 'sert_5', 'sert_6', 'sert_7', 'sert_8',
            'sert_br_1', 'sert_br_2', 'sert_br_3', 'sert_br_4', 'sert_br_5', 'sert_br_6', 'sert_br_7', 'sert_br_8',
            'sert_rok_1', 'sert_rok_2', 'sert_rok_3', 'sert_rok_4', 'sert_rok_5', 'sert_rok_6', 'sert_rok_7', 'sert_rok_8'
        );
    }
    
}
