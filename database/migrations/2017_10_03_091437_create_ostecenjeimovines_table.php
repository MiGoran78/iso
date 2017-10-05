<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOstecenjeimovinesTable extends Migration {

    public function up() {
        Schema::create('ostecenjeimovines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idRef');

            $table->string('narucilac')->default('');
            $table->string('primalac')->default('');
            $table->string('datum_prijema')->default('');
            $table->string('naziv')->default('');
            $table->string('rn')->default('');
            $table->string('stanje')->default('');
            $table->string('uzrok')->default('');
            $table->string('uzrok_datum')->default('');
            $table->string('nacin_obav')->default('');
            $table->string('nacin_obav_datum')->default('');
            $table->string('nacin_resavanja')->default('');
            $table->string('nacin_resavanja_datum')->default('');
            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("ostecenjeimovines");
    }
}
