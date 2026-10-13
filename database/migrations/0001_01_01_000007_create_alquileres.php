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
        Schema::create('alquileres', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_solicitud');
            $table->date('fecha_inicio');
            $table->date('fecha_finalizacion');
            $table->string('estado'); // Registrado, finalizado, etc.

            //Clave Foranea a Categorias
            $table->foreignId('cliente_id')->constrained('categorias')->ondelete('cascade');
            $table->foreignId('empleado_id')->constrained('empleados')->ondelete('cascade');
            $table->timestamps();
        });
    }

     /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquileres');
        
    }
};