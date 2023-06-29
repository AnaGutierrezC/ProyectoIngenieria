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
            $table->increments('id');
            $table->integer('email_id')->unsigned()->nullable();
            $table->integer('estado_id')->unsigned();
            $table->integer('priority_id')->unsigned();
            $table->string('category_id',255);
            $table->string('etiqueta_id',255);
            $table->integer('comentario_id')->unsigned()->nullable();
            $table->string('subject', 255);
            $table->string('ticket', 255);
            $table->datetime('posting_date')->nullable();

            $table->timestamps();

            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('comentario_id')->references('id')->on('comentarios');
            $table->foreign('priority_id')->references('id')->on('prioridades');
            $table->foreign('email_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
