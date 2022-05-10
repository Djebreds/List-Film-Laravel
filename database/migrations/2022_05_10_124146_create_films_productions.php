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
        Schema::create('films_productions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('film_id')->unsigned();
            $table->unsignedBigInteger('production_id')->unsigned();
        });
        Schema::table('films_productions', function($table) {
            $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');
            $table->foreign('production_id')->references('id')->on('productions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films_productions');
    }
};
