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
        Schema::create('obra_processo', function (Blueprint $table) {
            $table->id();
            $table->string('n_processo', 255)->nullable;
            $table->longText('credor')->nullable;
            $table->longText('objeto')->nullable;
            $table->decimal('valor', $precision = 10, $scale = 2)->nullable;
            $table->string('prazo', 255)->nullable;
            $table->date('dt_abertura')->nullable;
            $table->date('dt_inicio')->nullable;
            $table->date('dt_termino')->nullable;
            $table->integer('n_empenho')->nullable;
            $table->date('dt_empenho')->nullable;
            $table->integer('n_liquidacao')->nullable;
            $table->date('dt_liquidacao')->nullable;
            $table->date('dt_pagamento')->nullable;
            $table->string('tipo_doc', 255)->nullable;
            $table->string('local', 255)->nullable;
            $table->string('situacao', 255)->nullable;
            $table->string('pasta', 255)->nullable;
            $table->longText('observacoes')->nullable;
            $table->longText('descricao')->nullable;
            $table->integer('status')->nullable;
            $table->unsignedBigInteger('fk_usuario_criador')->nullable;
            $table->unsignedBigInteger('fk_usuario_modificador')->nullable;
            $table->timestamps();


            $table->foreign('fk_usuario_criador')->references('id')->on('users');
            $table->foreign('fk_usuario_modificador')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obra_processo');
    }
};
