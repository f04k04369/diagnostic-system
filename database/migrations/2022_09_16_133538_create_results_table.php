<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('point_1');
            $table->integer('point_2');
            $table->integer('point_3');
            $table->integer('point_4');
            $table->integer('point_5');
            $table->integer('point_6');
            $table->integer('point_7');
            $table->integer('point_8');
            $table->integer('point_9');
            $table->integer('point_10');
            $table->integer('total_point');
            $table->string('capture');
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
        Schema::dropIfExists('results');
    }
}
