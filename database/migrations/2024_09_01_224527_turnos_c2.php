<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('turnos_c2', function (Blueprint $table) {
            $table->id();  // Esta columna será 'bigint unsigned NOT NULL auto_increment PRIMARY KEY'
            $table->string('fecha');
            $table->string('horario');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turnos');
    }
};