<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->unsignedBigInteger('format');
            $table->unsignedInteger('length');
            $table->string('year');
            $table->unsignedSmallInteger('rating');
            $table->timestamps();
        });

        Schema::table('movies', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('format')->references('id')->on('movie_formats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('movies');
        Schema::enableForeignKeyConstraints();
    }
}
