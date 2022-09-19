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
        Schema::create('consejo_puntos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consejo_id');
            $table->unsignedBigInteger('punto_id');
            $table->timestamps();

            $table->foreign('consejo_id')->references('id')->on('consejos');
            $table->foreign('punto_id')->references('id')->on('puntos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consejo_puntos');
    }
};
