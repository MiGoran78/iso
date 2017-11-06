<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReklamacijasTable extends Migration
{
    public function up() {
        Schema::create('reklamacijas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('idRef')->nullable();

            $table->text('supplier')->nullable();
            $table->text('contact')->nullable();
            $table->text('email')->nullable();
            $table->text('subject')->nullable();
            $table->text('description')->nullable();
            $table->text('type')->nullable();
            $table->text('reference')->nullable();
            $table->text('quantity')->nullable();
            $table->text('value')->nullable();
            $table->text('date')->nullable();
            $table->text('claimed_qty')->nullable();
            $table->text('att_1')->nullable();
            $table->text('att_2')->nullable();
            $table->text('att_3')->nullable();
            $table->text('date_sign')->nullable();
            $table->text('signature')->nullable();

            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("reklamacijas");
    }
}


