<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();

            // Foreign keys
            $table->foreignId('classe')->constrained('produtos_classes')->onDelete('cascade');
            $table->foreignId('principios_ativo')->constrained('principios_ativos')->onDelete('cascade');
            $table->foreignId('marca_comercial')->constrained('marcas_comerciais')->onDelete('cascade');
            $table->foreignId('tipos_de_peso')->constrained('tipos_de_peso')->onDelete('cascade');
            $table->foreignId('familia')->constrained('familia')->onDelete('cascade');

            // Outros campos
            $table->string('apresentacao');
            $table->string('dose_sugerida_hectare');

            // Timestamps opcionais (remova se não quiser)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
