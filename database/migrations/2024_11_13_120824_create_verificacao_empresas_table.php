<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('verificacao_empresas', function (Blueprint $table) {
            $table->id();
            $table->year('ano');
            $table->string('numero_pasta');
            $table->string('nome_fantasia');
            $table->string('inscricao_municipal')->unique();
            $table->string('area_total');
            $table->date('data_validade');
            $table->string('area_utilizada');
            $table->boolean('te_prefeitura');
            $table->boolean('tp_prefeitura');
            $table->boolean('arq_prefeitura');
            $table->boolean('ent_prefeitura');
            $table->boolean('te_bombeiro');
            $table->boolean('tp_bombeiro');
            $table->boolean('arq_bombeiro');
            $table->boolean('ent_bombeiro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verificacao_empresas');
    }
};
