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
        Schema::create('obra_controle_medicao', function (Blueprint $table) {
            $table->id();
            $table->string('n_processo', 255)->nullable;
            $table->date('dt_entrada')->nullable;
            $table->decimal('valor_medido', $precision = 10, $scale = 2)->nullable;
            $table->date('dt_inicio_medicao')->nullable;
            $table->date('dt_final_medicao')->nullable;
            $table->string('glosa_desglosa', 255)->nullable;
            $table->decimal('valor_fatura', $precision = 10, $scale = 2)->nullable;
            $table->string('pg_empenho', 255)->nullable;
            $table->string('empresa',255)->nullable;
            $table->longText('objeto')->nullable;
            $table->string('secretaria', 255)->nullable;
            $table->string('localizacao', 255)->nullable;
            $table->longText('observacoes')->nullable;
            $table->longText('descricao')->nullable;
            $table->integer('status')->nullable;
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
        Schema::dropIfExists('obra_controle_medicao');
    }
};
