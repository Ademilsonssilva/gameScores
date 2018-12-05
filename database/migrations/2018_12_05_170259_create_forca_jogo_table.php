<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForcaJogoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forca_jogo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jogador');
            $table->text('resumo_jogo');
            $table->enum('resultado', ['vitoria', 'derrota']);
            $table->unsignedInteger('pergunta_id');
            $table->unsignedInteger('nota');
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
        Schema::dropIfExists('forca_jogo');
    }
}
