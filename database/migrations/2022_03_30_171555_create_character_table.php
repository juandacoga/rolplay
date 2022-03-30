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
        Schema::create('character__manager', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('Nombre del personaje');
            $table->string('player')->nullable()->comment('Nombre del jugador');
            $table->string('nature')->nullable()->comment('Naturaleza del personaje');
            $table->string('essence')->nullable()->comment('Escencia del personaje');
            $table->string('conduct')->nullable()->comment('Conducta del personaje');
            $table->string('tradition')->nullable()->comment('Tradición del personaje');
            $table->string('concept')->nullable()->comment('Concepto del personaje');
            $table->string('alignment')->nullable()->comment('Alineamiento del personaje');


            $table->integer('dynamic_resonance')->default(0)->nullable()->comment('Resonacia dinamica');
            $table->integer('chaotic_resonance')->default(0)->nullable()->comment('Resonacia caotica');
            $table->integer('static_resonance')->default(0)->nullable()->comment('Resonacia estatica');
            $table->integer('Occultism')->default(0)->nullable()->comment('Resistencia mental');
            $table->integer('Occultism')->default(0)->nullable()->comment('Resistencia magica');
            $table->integer('Occultism')->default(0)->nullable()->comment('Resistencia espiritual');
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
        Schema::dropIfExists('character__manager');
    }
};
