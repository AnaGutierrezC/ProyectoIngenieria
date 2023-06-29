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
        Schema::create("usuarios", function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->string('email_id', 255)->nullable()->unique();
            $table->string('cedula', 15)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('telefono', 255)->nullable();
            $table->string('genero', 255)->nullable();
            $table->integer('rol_id')->unsigned();
            $table->timestamp('posting_date')->nullable();

            $table->timestamps();

            $table->foreign('rol_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("usuarios");
    }
};
