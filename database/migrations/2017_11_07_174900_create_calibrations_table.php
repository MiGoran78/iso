<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCalibrationsTable extends Migration {

    public function up() {
        Schema::create('calibrations', function (Blueprint $table) {
            $table->increments('id');
            $table->text('idRef');

            $table->text('instr_1')->nullable();
            $table->text('model')->nullable();
            $table->text('manufacturer')->nullable();
            $table->text('cert_number')->nullable();
            $table->text('date')->nullable();
            $table->text('calib_cycle')->nullable();
            $table->text('recalib_due')->nullable();
            $table->text('location')->nullable();
            $table->text('id_descr')->nullable();
            $table->text('cal_date')->nullable();
            $table->text('due_date')->nullable();
            $table->text('accuracy')->nullable();
            $table->text('reference')->nullable();
            $table->text('instr_2')->nullable();
            $table->text('results')->nullable();
            $table->text('calib_by')->nullable();
            $table->text('test_condit')->nullable();

            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("calibrations");
    }
}
