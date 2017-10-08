<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class PreispitRuk extends Model {
    public $fillable = ['id', 'idRef',
                'datum', 'clan_1', 'clan_2', 'clan_3', 'clan_4', 'clan_5', 'funkcija_1', 'funkcija_2', 'funkcija_3', 'funkcija_4', 'funkcija_5', 'karakter',
                'politika', 'ciljevi', 'rezultat', 'informacije', 'efektivnost', 'status', 'vrednovanje', 'reakcija', 'ucinak', 'mere', 'izmene', 'preporuke',
                'ostalo', 'rez_efikas', 'rez_zahte', 'rez_potreba', 'rez_ciljevi', 'ciljevi_izvestaj', 'odobrio_ime', 'odobrio_datum'
    ];
}

//datum
//clan_1
//clan_2
//clan_3
//clan_4
//clan_5
//funkcija_1
//funkcija_2
//funkcija_3
//funkcija_4
//funkcija_5
//karakter
//politika
//ciljevi
//rezultat
//informacije
//efektivnost
//status
//vrednovanje
//reakcija
//ucinak
//mere
//izmene
//preporuke
//ostalo

//rez_efikas
//rez_zahte
//rez_potreba
//rez_ciljevi
//ciljevi_izvestaj
//odobrio_ime
//odobrio_datum