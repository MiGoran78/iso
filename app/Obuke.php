<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Obuke extends Model {
    public $fillable = ['id','idRef','naziv','vrsta','izdao','dat_pocetka','dat_zavrsetka','polaznik','plan','plan_path','izvestaj','izvestaj_path','ocena','ocena_napomena','status'];
}

//naziv
//vrsta
//izdao
//dat_pocetka
//dat_zavrsetka
//polaznik
//plan
//plan_path
//izvestaj
//izvestaj_path
//ocena
//ocena_napomena
//status
