<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parentalnickname');
            $table->string('parentalphone')->index;
            $table->date('babybirthday');
            $table->string('babynickname');
            $table->boolean('babysex');
            $table->boolean('isshow');
            $table->bigInteger('package');
            $table->bigInteger('category')->index;
            $table->string('remarks');
            $table->boolean('telephoneconsultation');
            $table->boolean('price');
            $table->bigInteger('userid')->unique;
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
        Schema::dropIfExists('order');
    }
}
