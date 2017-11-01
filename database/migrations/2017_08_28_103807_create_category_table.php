<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCategoryTable extends Migration {

    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level');
            $table->string('title');
            $table->integer('parent_id');
            $table->string('path');
            $table->string('sifra');
            $table->timestamps();
        });
    }


    public function down() {
        Schema::drop("categories");
    }
}
