<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateObukesTable extends Migration {

    public function up() {
        Schema::create('obukes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('idRef');

            $table->text('naziv');
            $table->text('vrsta');
            $table->text('izdao');
            $table->text('dat_pocetka');
            $table->text('dat_zavrsetka');
            $table->text('polaznik');
            $table->text('plan');
            $table->text('plan_path');
            $table->text('izvestaj');
            $table->text('izvestaj_path');
            $table->text('ocena');
            $table->text('ocena_napomena');
            $table->text('status');

            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("obukes");
    }
}

