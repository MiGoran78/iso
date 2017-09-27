<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDobavljacsTable extends Migration
{
    public function up() {
        Schema::create('dobavljacs', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('idRef');
            $table->string('dobavljac_tip')->default('');
            $table->string('dobavljac')->default('');
            $table->string('ulica')->default('');
            $table->string('mesto')->default('');
            $table->string('zemlja')->default('');
            $table->string('kontakt1')->default('');
            $table->string('kontakt2')->default('');
            $table->string('telefon1')->default('');
            $table->string('telefon2')->default('');
            $table->string('sert_1')->default('');
            $table->string('sert_2')->default('');
            $table->string('sert_3')->default('');
            $table->string('sert_4')->default('');
            $table->string('sert_5')->default('');
            $table->string('sert_6')->default('');
            $table->string('sert_7')->default('');
            $table->string('sert_8')->default('');
            $table->string('sert_br_1')->default('');
            $table->string('sert_br_2')->default('');
            $table->string('sert_br_3')->default('');
            $table->string('sert_br_4')->default('');
            $table->string('sert_br_5')->default('');
            $table->string('sert_br_6')->default('');
            $table->string('sert_br_7')->default('');
            $table->string('sert_br_8')->default('');
            $table->string('sert_rok_1')->default('');
            $table->string('sert_rok_2')->default('');
            $table->string('sert_rok_3')->default('');
            $table->string('sert_rok_4')->default('');
            $table->string('sert_rok_5')->default('');
            $table->string('sert_rok_6')->default('');
            $table->string('sert_rok_7')->default('');
            $table->string('sert_rok_8')->default('');
            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("dobavljacs");
    }
}
