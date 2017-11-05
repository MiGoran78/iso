<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreispitRuksTable extends Migration {

    public function up() {
        Schema::create('preispit_ruks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('idRef')->nullable();

            $table->text('datum')->nullable();
            $table->text('clan_1')->nullable();
            $table->text('clan_2')->nullable();
            $table->text('clan_3')->nullable();
            $table->text('clan_4')->nullable();
            $table->text('clan_5')->nullable();
            $table->text('funkcija_1')->nullable();
            $table->text('funkcija_2')->nullable();
            $table->text('funkcija_3')->nullable();
            $table->text('funkcija_4')->nullable();
            $table->text('funkcija_5')->nullable();
            $table->text('karakter')->nullable();

            $table->text('ul_1')->nullable();
            $table->text('ul_2')->nullable();
            $table->text('ul_2_1')->nullable();
            $table->text('ul_2_2')->nullable();
            $table->text('ul_3_1')->nullable();
            $table->text('ul_3_2')->nullable();
            $table->text('ul_3_3')->nullable();
            $table->text('ul_3_4')->nullable();
            $table->text('ul_3_5')->nullable();
            $table->text('ul_3_6')->nullable();
            $table->text('ul_3_7')->nullable();
            $table->text('ul_3_8')->nullable();
            $table->text('ul_3_9')->nullable();
            $table->text('ul_4')->nullable();
            $table->text('ul_5')->nullable();
            $table->text('ul_6')->nullable();
            $table->text('ul_7')->nullable();
            $table->text('ul_8')->nullable();
            $table->text('ul_9')->nullable();
            $table->text('ul_10')->nullable();
            $table->text('iz_1')->nullable();
            $table->text('iz_2')->nullable();
            $table->text('iz_3')->nullable();
            $table->text('iz_4')->nullable();
            $table->text('iz_5')->nullable();

//            $table->string('politika')->default('');
//            $table->string('ciljevi')->default('');
//            $table->string('rezultat')->default('');
//            $table->string('informacije')->default('');
//            $table->string('efektivnost')->default('');
//            $table->string('status')->default('');
//            $table->string('vrednovanje')->default('');
//            $table->string('reakcija')->default('');
//            $table->string('ucinak')->default('');
//            $table->string('mere')->default('');
//            $table->string('izmene')->default('');
//            $table->string('preporuke')->default('');
//            $table->string('ostalo')->default('');
//            $table->string('rez_efikas')->default('');
//            $table->string('rez_zahte')->default('');
//            $table->string('rez_potreba')->default('');
//            $table->string('rez_ciljevi')->default('');

            $table->text('ciljevi_izvestaj')->nullable();
            $table->text('odobrio_ime')->nullable();
            $table->text('odobrio_datum')->nullable();

            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("preispit_ruks");
    }
}
