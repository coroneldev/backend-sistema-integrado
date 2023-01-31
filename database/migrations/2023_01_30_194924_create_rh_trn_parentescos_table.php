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
        Schema::create('rh_trn_parentescos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->foreign('persona_id')->references('id')->on('rh_trn_personas');
            $table->unsignedBigInteger('parentesco_id');
            $table->foreign('parentesco_id')->references('id')->on('rh_cl_parentescos');
            $table->unsignedBigInteger('expedido_ci_id')->nullable();
            $table->foreign('expedido_ci_id')->references('id')->on('rh_cl_ciudades');
            $table->string('nombres',50);
            $table->string('apellidos',100);
            $table->string('cedula_identidad',20)->nullable();
            $table->text('direccion_laboral')->nullable();
            $table->text('direccion_parentesco')->nullable();
            $table->string('correo_personal',50)->nullable();
            $table->string('telefono');
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
        Schema::dropIfExists('rh_trn_parentescos');
    }
};
