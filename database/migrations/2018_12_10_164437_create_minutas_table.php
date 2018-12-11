<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minutas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer ('user_id');
            $table->integer ('tipo_id');
            $table->time ('hora');
            $table->string ('plan')->nullable ();
            $table->string ('dificultades')->nullable ();
            $table->string ('competencias')->nullable ();
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
        Schema::dropIfExists('minutas');
    }
}
