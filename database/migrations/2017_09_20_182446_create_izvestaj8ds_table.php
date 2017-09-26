<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateIzvestaj8dsTable extends Migration
{
    public function up() {
        Schema::create('izvestaj8ds', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('idRef');
            $table->string('Concern_title');
            $table->string('Quantity_claimed');
            $table->string('Supplier');
            $table->string('Order_no');
            $table->string('Claim_number');
            $table->string('Nonconformity');
            $table->string('Names');
            $table->string('Departments');
            $table->string('Contacts');
            $table->string('D2');
            $table->string('D3');
            $table->string('D4');
            $table->string('D5');
            $table->string('D6');
            $table->string('D7');
            $table->string('D8');
            $table->string('Finish_d3');
            $table->string('Finish_d4');
            $table->string('Finish_d5');
            $table->string('Finish_d6');
            $table->string('Finish_d7');
            $table->string('Finish_d8');
            $table->string('Close_date');
            $table->string('Reported_by');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop("izvestaj8ds");
    }
}
