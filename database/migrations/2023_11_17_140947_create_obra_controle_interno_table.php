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
        Schema::create('obra_controle_interno', function (Blueprint $table) {
            $table->id();
            $table->string('empresa',255)->nullable;
            $table->string('solicitante',255)->nullable;
            $table->longText('objeto')->nullable;
            $table->longText('local')->nullable;
            $table->date('data')->nullable;
            $table->string('situacao',255)->nullable;
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
        Schema::dropIfExists('obra_controle_interno');
    }
};
