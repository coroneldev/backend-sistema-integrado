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
        Schema::create('rh_trn_menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sistema_id')->nullable();
            $table->foreign('sistema_id')->references('id')->on('rh_cl_sistemas');
            $table->string('nombre', 255);
            $table->string('url', 255);
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
        Schema::dropIfExists('rh_trn_menus');
    }
};
