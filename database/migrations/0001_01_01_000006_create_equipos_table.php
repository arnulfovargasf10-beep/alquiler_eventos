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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 50)->unique();
            $table->string('nombre', 150);
            $table->text('descripcion')->nullable();
            $table->string('marca', 100);
            $table->decimal('precio_alquiler_dia', 10, 2);
            $table->string('estado', 50)->default('Disponible');// disponible, mantenimiento, etc.

            //Clave Foranea a Categorias
            $table->foreignId('categoria_id')->constrained('categorias')->ondelete('cascade');
            $table->timestamps();
        });
    }

     /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
        
    }
};