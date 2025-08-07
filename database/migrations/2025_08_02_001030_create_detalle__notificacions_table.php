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
        Schema::create('detalle__notificacions', function (Blueprint $table) {
            $table->id('id_detalle_not');
            $table->foreignId('idNotificacion')->constrained('notificacions', 'idNotificacion');
            $table->foreignId('id')->constrained('users');
            $table->string('email_destinatario');
            $table->dateTime('fecha_envio');
            $table->string('estado')->default('pendiente');
            $table->dateTime('fecha_lectura')->nullable();
            $table->text('error_detalle')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle__notificacions');
    }
};
