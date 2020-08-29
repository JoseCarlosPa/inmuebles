<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmbueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmbuebles', function (Blueprint $table) {
            $table->id();
            $table->string('venta_renta')->nullable();
            $table->string('nombre')->nullable();
            $table->unsignedBigInteger('id_propiedad');
            $table->unsignedBigInteger('id_ubicacion');
            $table->string('extracto')->nullable();
            $table->string('img')->nullable();
            $table->string('pdf')->nullable();
            $table->timestamps();

            $table->foreign('id_propiedad')->references('id')->on('propiedads');
            $table->foreign('id_ubicacion')->references('id')->on('ubicacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmbuebles');
    }
}
