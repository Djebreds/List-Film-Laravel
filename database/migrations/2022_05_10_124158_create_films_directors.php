<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films_directors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('film_id')->unsigned();
            $table->unsignedBigInteger('director_id')->unsigned();

        });
        Schema::table('films_directors', function($table) {
            $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');
            $table->foreign('director_id')->references('id')->on('directors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films_directors');
    }
};
