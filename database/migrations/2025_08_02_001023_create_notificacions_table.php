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
        Schema::create('notificacions', function (Blueprint $table) {
            $table->id('idNotificacion');
            $table->foreignId('idProducto')->constrained('productos', 'idProductos');
            $table->string('tipo_Notificacion');
            $table->string('asunto');
            $table->text('mensaje');
            $table->dateTime('fecha_creacion');
            $table->boolean('procesada')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacions');
    }
};
