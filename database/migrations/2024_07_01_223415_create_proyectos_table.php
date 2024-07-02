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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('descripcion');
            $table->string('fecha_fin');
            $table->string('fecha_inicio');
            $table->string('cuantia');

            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')
            ->references('id')
            ->on('clientes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
