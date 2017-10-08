<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreispitRuksTable extends Migration {

    public function up() {
        Schema::create('preispit_ruks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idRef');

            $table->string('datum')->default('');
            $table->string('clan_1')->default('');
            $table->string('clan_2')->default('');
            $table->string('clan_3')->default('');
            $table->string('clan_4')->default('');
            $table->string('clan_5')->default('');
            $table->string('funkcija_1')->default('');
            $table->string('funkcija_2')->default('');
            $table->string('funkcija_3')->default('');
            $table->string('funkcija_4')->default('');
            $table->string('funkcija_5')->default('');
            $table->string('karakter')->default('');
            $table->string('politika')->default('');
            $table->string('ciljevi')->default('');
            $table->string('rezultat')->default('');
            $table->string('informacije')->default('');
            $table->string('efektivnost')->default('');
            $table->string('status')->default('');
            $table->string('vrednovanje')->default('');
            $table->string('reakcija')->default('');
            $table->string('ucinak')->default('');
            $table->string('mere')->default('');
            $table->string('izmene')->default('');
            $table->string('preporuke')->default('');
            $table->string('ostalo')->default('');
            $table->string('rez_efikas')->default('');
            $table->string('rez_zahte')->default('');
            $table->string('rez_potreba')->default('');
            $table->string('rez_ciljevi')->default('');
            $table->string('ciljevi_izvestaj')->default('');
            $table->string('odobrio_ime')->default('');
            $table->string('odobrio_datum')->default('');

            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("preispit_ruks");
    }
}
