<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('ruc')->nullable ();
            $table->string ('nombre');
            $table->string ('apellido');
            $table->string ('email')->nullable ();
            $table->string ('telefono')->nullable ();
            $table->string ('tipo')->default ('nuevo');
            $table->string ('segmento')->default ('home');
            $table->integer ('empresa_id')->nullable ();
            $table->string ('link_bitrix')->nullable ();
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
        Schema::dropIfExists('clientes');
    }
}
