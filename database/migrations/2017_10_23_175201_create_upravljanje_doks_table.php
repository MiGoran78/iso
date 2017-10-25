<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpravljanjeDoksTable extends Migration {

    public function up() {
        Schema::create('upravljanje_doks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('idRef');

            $table->text('sifra');
            $table->text('naziv');
            $table->text('naslov');

            $table->text('sadrzaj');
            $table->text('uvod');
            $table->text('ref_dokumenta');
            $table->text('definicije');
            $table->text('opis');
            $table->text('izmene');
            $table->text('pracenje');
            $table->text('prilozi');

            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("upravljanje_doks");
    }
}

//id
//idRef
//sifra
//naziv
//naslov
//sadrzaj
//uvod
//ref_dokumenta
//definicije
//opis
//izmene
//pracenje
//prilozi
