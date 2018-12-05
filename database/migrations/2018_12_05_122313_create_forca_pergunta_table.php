<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForcaPerguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forca_pergunta', function (Blueprint $table) {
            $table->increments('id');
            $table->text('dica');
            $table->string('resposta');
            $table->string('email_criador')->nullable();
            $table->boolean('ativo');
            $table->unsignedInteger('categoria_id')->default(1);
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
        Schema::dropIfExists('forca_pergunta');
    }
}
