<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKidsimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kidsimages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('picUrl');
            $table->string('advertUrl');
            $table->bigInteger('package');
            $table->bigInteger('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kidsimages');
    }
}
