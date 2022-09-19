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
        Schema::create('puntos', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->unsignedBigInteger('agenda_id');
            $table->foreign('agenda_id')->references('id')->on('agendas');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');

            $table->string('titulo');
            $table->text('descripcion');
            $table->text('acuerdo_instrucciones');

=======
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('acuerdo_instrucciones');
>>>>>>> 514e77879321829b75344e87b8deef1bb52ce0b0
            $table->date('fecha_ultima_actualizacion');
            $table->unsignedBigInteger('agenda_id');
            $table->unsignedBigInteger('estado_id');
            $table->timestamps();

            $table->foreign('agenda_id')->references('id')->on('agendas');
            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puntos');
    }
};
