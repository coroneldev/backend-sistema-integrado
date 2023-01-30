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
        Schema::create('rh_trn_experiencias_laborales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->foreign('persona_id')->references('id')->on('rh_trn_personas');
            $table->string('lugar_trabajo', 100)->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->string('cargo_desempeniado', 50)->nullable();
            $table->string('funcion_desempeniada', 50)->nullable();
            $table->string('nombre_inmediato_superior', 50)->nullable();
            $table->string('cargo_inmediato_superior', 50)->nullable();
            $table->decimal('salario_percibido', 8, 2)->nullable();
            $table->string('motivo_desvinculacion', 50)->nullable();
            $table->boolean('vigente')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('rh_trn_experiencias_laborales');
    }
};
