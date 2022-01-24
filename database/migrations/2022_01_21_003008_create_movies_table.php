<?php

use App\Models\Genere;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');//varchar(255)
            $table->text('synopsis');
            $table->boolean('type'); // true es pelicula false es serie
            $table->string('genere');
            $table->integer('duration');
            $table->year('year');
            $table->integer('price');
            // $table->unsignedBigInteger('genere')->default(random_int(0, 10));
            
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            // $table->foreign('genere')->references('id')->on('generes');
            // if (!Genere::all()) {
            //     echo 'no existe entradas de genero';
            // }

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
