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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('idProductos');
            $table->foreignId('idMarca')->constrained('marcas', 'idMarca');
            $table->foreignId('idModelo')->constrained('modelos', 'idModelo');
            $table->foreignId('idColor')->constrained('colors', 'idColor');
            $table->foreignId('id')->constrained('users');
            $table->string('descripcion');
            $table->decimal('precio', 10, 2);
            $table->integer('stock');
            $table->string('img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
