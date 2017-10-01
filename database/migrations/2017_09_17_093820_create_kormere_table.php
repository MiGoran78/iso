<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateKormereTable extends Migration
{
    public function up() {
        Schema::create('korektivna_meras', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('idRef');
            $table->date('date_open');
            $table->string('date_deadline')->default('');
            $table->string('date_close')->default('');
            $table->string('kor_mera')->default('');
            $table->string('vlasnik')->default('');
            $table->string('preispitivano')->default('');
            $table->string('client_id');
            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("korektivna_meras");
    }
}
