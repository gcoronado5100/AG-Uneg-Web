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
        Schema::create('consejo_role_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("consejo_id")->nullable();
            $table->unsignedBigInteger("role_id");
            $table->unsignedBigInteger("user_id");
            $table->timestamps();

            $table->foreign("consejo_id")->references("id")->on("consejos")->onDelete("cascade");
            $table->foreign("role_id")->references("id")->on("roles")->onDelete("cascade");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consejo_role_user');
    }
};
