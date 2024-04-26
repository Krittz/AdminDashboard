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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('especie');
            $table->string('raca')->nullable();
            $table->enum('sexo', ['macho', 'femea']);
            $table->date('data_nascimento')->nullable();
            $table->date('data_aquisicao')->nullable();
            $table->date('data_venda')->nullable();
            $table->decimal('custo_aquisicao', 10, 2)->nullable();
            $table->decimal('preco_venda', 10, 2)->nullable();
            $table->enum('status', ['solteiro', 'em_producao', 'vendido']);
            $table->string('mae_nome')->nullable();
            $table->string('pai_nome')->nullable();
            $table->string('observacoes')->nullable();
            $table->enum('prenhez', ['sim', 'nao'])->default('nao');
            $table->binary('photo')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relacionamento com o usuário
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
