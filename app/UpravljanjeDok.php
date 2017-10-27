<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class UpravljanjeDok extends Model {
    public $fillable = ['id', 'idRef', 'logo', 'sifra', 'verzija', 'naziv', 'naslov', 'sadrzaj', 'uvod', 'ref_dokumenta', 'definicije', 'opis', 'izmene', 'pracenje', 'prilozi', 'potpis', 'hide'];
}
