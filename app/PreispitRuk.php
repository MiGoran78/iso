<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class PreispitRuk extends Model {
    public $fillable = [
                'id', 'idRef',
                'datum', 'clan_1', 'clan_2', 'clan_3', 'clan_4', 'clan_5', 'funkcija_1', 'funkcija_2', 'funkcija_3', 'funkcija_4', 'funkcija_5', 'karakter',
                'ul_1', 'ul_2', 'ul_2_1', 'ul_2_2', 'ul_3_1', 'ul_3_2', 'ul_3_3', 'ul_3_4', 'ul_3_5', 'ul_3_6',
                'ul_3_7', 'ul_3_8', 'ul_3_9', 'ul_4', 'ul_5', 'ul_6', 'ul_7', 'ul_8', 'ul_9', 'ul_10',
                'iz_1', 'iz_2', 'iz_3', 'iz_4', 'iz_5',
                'ciljevi_izvestaj', 'odobrio_ime', 'odobrio_datum'

//                'id', 'idRef',
//                'datum', 'clan_1', 'clan_2', 'clan_3', 'clan_4', 'clan_5', 'funkcija_1', 'funkcija_2', 'funkcija_3', 'funkcija_4', 'funkcija_5', 'karakter',
//                'politika', 'ciljevi', 'rezultat', 'informacije', 'efektivnost', 'status', 'vrednovanje', 'reakcija', 'ucinak', 'mere', 'izmene', 'preporuke',
//                'ostalo', 'rez_efikas', 'rez_zahte', 'rez_potreba', 'rez_ciljevi',
//                'ciljevi_izvestaj', 'odobrio_ime', 'odobrio_datum'
    ];
}

//ul_1
//ul_2
//ul_2_1
//ul_2_2
//ul_3_1
//ul_3_2
//ul_3_3
//ul_3_4
//ul_3_5
//ul_3_6
//ul_3_7
//ul_3_8
//ul_3_9
//ul_4
//ul_5
//ul_6
//ul_7
//ul_8
//ul_9
//ul_10
//iz_1
//iz_2
//iz_3
//iz_4
//iz_5


// #### ULAZNI PODACI ####
//1.   Status mera iz prethodnih preispitivanja
//2.   Izmene u eksternim i internim pitanjima koje su relevantne za integrisani sistem menadžmenta
//2.1  Potrebe i očekivanja zainteresovanih strana, uključujući potrebe za usklađenost
//2.2  Značajni aspekti životne sredine i hazardi bezbednosti i zdravlja na radu
//#3.   Informacije o performansama i efektinosti integrisanog sistema, uključujući politiku i trendove:
//3.1  Zadovoljstvom korisnika i povratnim informacijama od relevantnih zainteresovanih strana
//3.2  Obim ispunjenja ciljeva kvaliteta proizvoda, životne sredine i zaštite zdravlja, bezbednosti na radu
//3.3  Performanse procesa i usaglašenost proizvoda
//3.4  Neusaglašenost i korektivne mere
//3.5  Rezultati praćenja i merenja
//3.6  Ispunjenost obaveza za usklađenost
//3.7  Rezultati provera
//3.8  Performanse eksternih isporučilaca
//3.9  Politika IMS
//4.   Adekvatnost resursa
//5.   Efektivnost preduzetih mera
//6.   Reagovanje zainteresovanih strana
//7.   Prilike za stalna poboljšanja
//8.   EMS i OHSAS učinak organizacije
//9.   Status istraživanja incidenata i preventivnih mera OHSAS
//10.  Rezultati učešća i konsultacija OHSAS

// #### IZLAZNI PODACI ####
//1.   Prilike za poboljšanje i potreba za izmenama u integrisanom sistemu upravljanja
//2.   Potreba za resursima
//3.   Pogodnost, adekvatnost i efektinost integrisanog sistema menadžmenta
//4.   Mere ukoliko ciljevi integrisanog sistema nisu ispunjeni
//5.   Učinak, politika i ciljevi
