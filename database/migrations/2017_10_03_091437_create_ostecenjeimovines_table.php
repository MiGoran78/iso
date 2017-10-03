<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOstecenjeimovinesTable extends Migration {

    public function up() {
        Schema::create('ostecenjeimovines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idRef');

            $table->string('narucilac');
            $table->string('primalac');
            $table->string('datum_prijema')->default('');
            $table->string('Naziv');
            $table->string('rn');
            $table->string('stanje');
            $table->string('uzrok');
            $table->string('uzrok_datum')->default('');
            $table->string('nacin_obav');
            $table->string('nacin_obav_datum')->default('');
            $table->string('nacin_resavanja');
            $table->string('nacin_resavanja_datum')->default('');
            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("ostecenjeimovines");
    }
}
