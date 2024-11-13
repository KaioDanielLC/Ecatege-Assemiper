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
            $table->string('te_prefeitura');
            $table->string('tp_prefeitura');
            $table->string('arq_prefeitura');
            $table->string('ent_prefeitura');
            $table->string('te_bombeiro');
            $table->string('tp_bombeiro');
            $table->string('arq_bombeiro');
            $table->string('ent_bombeiro');
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
