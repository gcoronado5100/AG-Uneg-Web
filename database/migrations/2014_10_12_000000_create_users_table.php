<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cedula')->unique();
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->enum("genero", ["Masculino", "Femenino", "Prefiero no especificar"]);
            $table->date('fecha_nacimiento');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string("url_foto_perfil")->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
