<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpravljanjeDoksTable extends Migration {

    public function up() {
        Schema::create('upravljanje_doks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('idRef');

            $table->text('logo');
            $table->text('sifra')->default('');
            $table->text('verzija')->default('');
            $table->text('naziv')->default('');
            $table->text('naslov')->default('');
            $table->text('potpis')->default('');

            $table->text('sadrzaj')->default('');
            $table->text('uvod')->default('');
            $table->text('ref_dokumenta')->default('');
            $table->text('definicije')->default('');
            $table->text('opis')->default('');
            $table->text('izmene')->default('');
            $table->text('pracenje')->default('');
            $table->text('prilozi')->default('');
            $table->integer('hide')->default('0');

            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("upravljanje_doks");
    }
}

