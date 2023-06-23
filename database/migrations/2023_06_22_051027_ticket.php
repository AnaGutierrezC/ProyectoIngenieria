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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('titulo',40);
            $table->string('descripcion', 50)->unique();
            $table->string('estado', 50);
            $table->string('prioridad', 50);
            $table->string('categoria', 50);
            $table->string('etiqueta', 50);
            $table->string('agente');
            $table->timestamps();
        });
    }
  
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(tickets);
    }
};
