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
        Schema::create('empresa_filials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresas_id')->constrained()->onDelete('cascade');
            $table->string('nome_empresa');
            $table->string('nome_dono');
            $table->string('endereco');
            $table->string('telefone');
            $table->string('whatsapp');
            $table->string('celular');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresa_filials');
    }
};
