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
            $table->string('nombre')->nullable();
            $table->string('precio')->nullable();
            $table->string('venta_renta')->nullable();
            $table->unsignedBigInteger('id_propiedad');
            $table->unsignedBigInteger('id_ubicacion');
            $table->text('descripcion')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('municipio')->nullable();
            $table->string('google_maps')->nullable();

            $table->text('extracto')->nullable();
            $table->string('m2Terreno')->nullable();
            $table->string('m2Cons')->nullable();
            $table->string('agua')->nullable();
            $table->string('elect')->nullable();

            $table->string('portada')->nullable();
            $table->string('banner')->nullable();
            $table->string('img')->nullable();
            $table->string('pdf')->nullable();
            $table->string('link')->nullable();
            $table->string('link3d')->nullable();
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
