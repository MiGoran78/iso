<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUpraljanjeDoksTable extends Migration {

    public function up() {
        Schema::create('upraljanje_doks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idRef');

//            $table->string('')->default('');
//            $table->string('')->default('');
//            $table->string('')->default('');
//            $table->string('')->default('');
//            $table->string('')->default('');

            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("upraljanje_doks");
    }
}


//upraljanje_doks