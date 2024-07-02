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
        Schema::create('colaborador_proyecto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proyecto_id')->nullable();
            $table->unsignedBigInteger('colaborador_id')->nullable();
            $table->timestamps();

            $table->foreign('proyecto_id')
                ->references('id')
                ->on('proyectos')
                ->onDelete('cascade');

            $table->foreign('colaborador_id')
                ->references('id')
                ->on('colaboradors')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colaborador_proyecto');
    }
};