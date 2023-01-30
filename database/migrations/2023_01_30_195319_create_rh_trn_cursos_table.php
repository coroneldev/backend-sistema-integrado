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
        Schema::create('rh_trn_cursos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('rh_trn_personas');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('rh_cl_estados');
            $table->unsignedBigInteger('institucion_id')->nullable();
            $table->foreign('institucion_id')->references('id')->on('rh_cl_instituciones');
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->string('nombre', 255);
            $table->string('duracion', 50)->nullable();
            $table->string('tipo', 50);
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
        Schema::dropIfExists('rh_trn_cursos');
    }
};
