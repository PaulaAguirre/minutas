<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutaOportunidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minuta_oportunidad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer ('minuta_id');
            $table->integer ('oportunidad_id');
            $table->string ('estado')->default ('pendiente');
            $table->integer ('area_id');
            $table->integer ('orden');
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
        Schema::dropIfExists('minuta_oportunidad');
    }
}
