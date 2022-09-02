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
        Schema::create('consejo_punto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consejo_is');
            $table->foreign('consejo_is')->references('id')->on('consejos');
            $table->unsignedBigInteger('punto_id');
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
        //
    }
};
