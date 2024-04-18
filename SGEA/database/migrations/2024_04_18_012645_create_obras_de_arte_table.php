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
        Schema::create('obras_de_arte', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('artista_id');
        $table->string('titulo');
        $table->year('ano');
        $table->string('tecnica');
        $table->string('dimensiones');
        $table->text('descripcion');
        $table->timestamps();

        $table->foreign('artista_id')->references('id')->on('artistas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obras_de_arte');
    }
};
