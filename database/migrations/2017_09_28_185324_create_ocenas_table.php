<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcenasTable extends Migration
{
    public function up() {
        Schema::create('ocenas', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('idRef');
            $table->string('datum')->default('');
            $table->string('rok_vazenja')->default('');
            $table->string('naziv')->default('');
            $table->string('opis')->default('');
            $table->string('status')->default('');
            $table->string('prihatljiv')->default('');
            $table->integer('ocena')->default(0);
            $table->integer('q')->default(0);
            $table->integer('e')->default(0);
            $table->integer('r')->default(0);
            $table->integer('f')->default(0);
            $table->integer('d')->default(0);
            $table->integer('o')->default(0);
            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("ocenas");
    }
}
