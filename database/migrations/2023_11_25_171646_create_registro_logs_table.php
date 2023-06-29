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
        Schema::create('registro_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_id')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->datetime('posting_date')->nullable();

            $table->timestamps();

            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_logs');
    }
};
