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
        Schema::create('rh_cl_puestos', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion', 150)->nullable();
            $table->string('descripcion', 255)->nullable();
            $table->string('abreviatura', 50)->nullable();
            $table->string('nivel_salarial', 50)->nullable();
            $table->string('haber_mensual', 50)->nullable();
            $table->string('nro_item', 50)->nullable();
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
        Schema::dropIfExists('rh_cl_puestos');
    }
};
