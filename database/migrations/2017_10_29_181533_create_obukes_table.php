<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateObukesTable extends Migration {

    public function up() {
        Schema::create('obukes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('idRef');

            $table->text('naziv')->default('');
            $table->text('vrsta')->default('');
            $table->text('izdao')->default('');
            $table->text('dat_pocetka')->default('');
            $table->text('dat_zavrsetka')->default('');
            $table->text('polaznik')->default('');
            $table->text('plan')->default('');
            $table->text('plan_path')->default('');
            $table->text('izvestaj')->default('');
            $table->text('izvestaj_path')->default('');
            $table->text('ocena')->default('');
            $table->text('ocena_napomena')->default('');
            $table->text('status')->default('');

            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("obukes");
    }
}

