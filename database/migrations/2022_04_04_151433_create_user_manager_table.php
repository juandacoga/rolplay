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
        Schema::create('user__manager', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('Nombre del usuario');
            $table->integer('password_count')->default(0)->comment('Conteo de intentos');
            $table->integer('state')->comment('0 - Bloqueado; 1 - Activo; ');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('user__manager');
    }
};
