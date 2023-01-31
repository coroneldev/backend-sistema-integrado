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
        Schema::create('rh_trn_documentos_digitales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_documento_id')->nullable();
            $table->foreign('tipo_documento_id')->references('id')->on('rh_cl_tipos_documentos');
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->foreign('persona_id')->references('id')->on('rh_trn_personas');
            /*$table->unsignedBigInteger('usuario_validador_id')->nullable();
            $table->foreign('usuario_validador_id')->references('id')->on('users');*/
            $table->integer('id_registro_tabla')->nullable();
            $table->string('enlace', 255)->nullable();
            $table->string('nombre_archivo', 255)->nullable();
            $table->boolean('edicion')->default(1);
            $table->string('estado', 50)->nullable();
            $table->boolean('vigente')->default(1);
            $table->string('motivo_solicitud', 255)->nullable();
            $table->string('observacion', 255)->nullable();
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
        Schema::dropIfExists('rh_trn_documentos_digitales');
    }
};
