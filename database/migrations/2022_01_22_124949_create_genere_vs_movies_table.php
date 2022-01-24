<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenereVsMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('genere_vs_movies', function (Blueprint $table) {
            $table->id();

            $table->integer('genere_id');
            $table->unsignedBigInteger('movie_id');

            $table->foreign('genere_id')->references('id')->on('generes');
            $table->foreign('movie_id')->references('id')->on('movies');
        
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
        Schema::dropIfExists('genere_vs_movies');
    }
}
