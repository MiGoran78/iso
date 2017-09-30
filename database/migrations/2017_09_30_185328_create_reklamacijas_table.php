<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReklamacijasTable extends Migration
{
    public function up() {
        Schema::create('reklamacijas', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('idRef');

            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("reklamacijas");
    }
}
