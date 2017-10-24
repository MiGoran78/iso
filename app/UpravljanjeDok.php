<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class UpravljanjeDok extends Model {
    public $fillable = ['id', 'sifra', 'naziv', 'naslov', 'idRef', 'sadrzaj', 'uvod', 'ref_dokumenta', 'definicije', 'opis', 'izmene', 'pracenje', 'prilozi'];
}
