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
        Schema::create('rh_trn_datos_laborales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->foreign('persona_id')->references('id')->on('rh_trn_personas');

            $table->unsignedBigInteger('tipo_contrato_id')->nullable();
            $table->foreign('tipo_contrato_id')->references('id')->on('rh_cl_tipos_contratos');

            $table->unsignedBigInteger('estructura_organizacional_id')->nullable();
            $table->foreign('estructura_organizacional_id')->references('id')->on('rh_cl_estructuras_organizacionales');

            $table->unsignedBigInteger('horario_id')->nullable();
            $table->foreign('horario_id')->references('id')->on('rh_cl_horarios');

            $table->unsignedBigInteger('puesto_id')->nullable();
            $table->foreign('puesto_id')->references('id')->on('rh_cl_puestos');

            $table->unsignedBigInteger('organismo_financiador_id')->nullable();
            $table->foreign('organismo_financiador_id')->references('id')->on('rh_cl_organismos_financiadores');

            $table->unsignedBigInteger('categoria_viaje_id')->nullable();
            $table->foreign('categoria_viaje_id')->references('id')->on('rh_cl_categorias_viajes');

            $table->unsignedBigInteger('clasificacion_id')->nullable();
            $table->foreign('clasificacion_id')->references('id')->on('rh_cl_clasificaciones');

            $table->string('insumo', 255)->nullable();
           /* $table->unsignedBigInteger('insumo_id')->nullable();
            $table->foreign('insumo_id')->references('id')->on('rh_trn_insumos');*/

            $table->text('insumo_devuelto')->nullable();

            $table->unsignedBigInteger('identificador_id')->nullable();
            $table->foreign('identificador_id')->references('id')->on('rh_cl_identificadores');

            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->string('motivo_desvinculacion', 50)->nullable();
            $table->string('nro_contrato', 50)->nullable();
            $table->string('nro_item', 50)->nullable();
            $table->boolean('cas')->default(1);
            $table->string('nro_cas', 50)->nullable();
            $table->string('nombre_banco', 150)->nullable();
            $table->string('nro_cuenta_bancaria', 50)->nullable();
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
        Schema::dropIfExists('rh_trn_datos_laborales');
    }
};
