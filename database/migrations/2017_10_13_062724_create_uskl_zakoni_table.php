<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsklZakoniTable extends Migration {

    public function up() {
        Schema::create('uskl_zakoni', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idRef');

            // uskladjenost sa zakonima
            $table->string('standard')->default('');
            $table->string('naziv')->default('');
            $table->string('preispitivano')->default('');
            $table->string('datum')->default('');
            $table->string('popunio')->default('');

            //
            $table->string('')->default('');
            $table->string('')->default('');
            $table->string('')->default('');
            $table->string('')->default('');
            $table->string('')->default('');


            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("uskl_zakoni");
    }
}

