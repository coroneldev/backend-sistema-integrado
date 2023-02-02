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
        Schema::create('rh_trn_personas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('estado_civil_id')->nullable();
            $table->foreign('estado_civil_id')->references('id')->on('rh_cl_estados_civiles');
            $table->unsignedBigInteger('genero_id')->nullable();
            $table->foreign('genero_id')->references('id')->on('rh_cl_generos');
            $table->unsignedBigInteger('pais_id')->nullable();
            $table->foreign('pais_id')->references('id')->on('rh_cl_paises');
            $table->unsignedBigInteger('ciudad_id')->nullable();
            $table->foreign('ciudad_id')->references('id')->on('rh_cl_ciudades');
            $table->unsignedBigInteger('expedido_ci_id')->nullable();
            $table->foreign('expedido_ci_id')->references('id')->on('rh_cl_ciudades');
            $table->string('apellido_paterno', 50)->nullable();
            $table->string('apellido_materno', 50)->nullable();
            $table->string('nombres', 100)->nullable();
            $table->string('cedula_identidad', 20)->nullable();
            $table->string('complemento_ci', 5)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('telefono_fijo', 15)->nullable();
            $table->string('telefono_movil', 15)->nullable();
            $table->string('correo_personal', 50)->nullable();
            $table->string('nro_nua_afp', 30)->nullable();
            $table->string('nombre_afp', 50)->nullable();
            $table->string('nro_libreta_militar', 20)->nullable();
            $table->string('grupo_sanguineo', 5)->nullable();
            $table->string('nro_nit', 30)->nullable();
            $table->string('nombre_seguro_medico', 100)->nullable();
            $table->string('nro_seguro_medico', 30)->nullable();
            $table->boolean('licencia_conducir')->nullable();
            $table->string('licencia_categoria', 10)->nullable();
            $table->text('domicilio')->nullable();
            $table->boolean('vigente')->default(1);
            $table->boolean('identificador_dato_laboral')->default(0);
            $table->integer('estado_finalizacion')->default(0);
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
        Schema::dropIfExists('rh_trn_personas');
    }
};
