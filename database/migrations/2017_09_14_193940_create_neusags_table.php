<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateNeusagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('neusags', function (Blueprint $table) {
            $table->increments('id');
            $table->date('datum');
            $table->bigInteger('idRef');
            $table->string('kupac_poreklo')->default('');
            $table->string('provera_poreklo')->default('');
            $table->string('proces_poreklo')->default('');
            $table->string('neusag_std1')->default('');
            $table->string('neusag_std2')->default('');
            $table->string('neusag_std3')->default('');
            $table->string('neusag_std4')->default('');
            $table->string('opis')->default('');
            $table->string('uzrok')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop("neusags");
    }
}
