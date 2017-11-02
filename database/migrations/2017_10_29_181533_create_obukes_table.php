<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateObukesTable extends Migration {

    public function up() {
        Schema::create('obukes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('idRef');

            $table->longtext('naziv')->nullable();
            $table->longtext('vrsta')->nullable();
            $table->longtext('izdao')->nullable();
            $table->longtext('dat_pocetka')->nullable();
            $table->longtext('dat_zavrsetka')->nullable();
            $table->longtext('polaznik')->nullable();
            $table->longtext('plan')->nullable();
            $table->longtext('plan_path')->nullable();
            $table->longtext('izvestaj')->nullable();
            $table->longtext('izvestaj_path')->nullable();
            $table->longtext('ocena')->nullable();
            $table->longtext('ocena_napomena')->nullable();
            $table->longtext('status')->nullable();

            $table->longtext('sektor')->nullable();
            $table->longtext('mentor')->nullable();
            $table->longtext('instruktor')->nullable();
            $table->longtext('komisija')->nullable();

            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("obukes");
    }
}

