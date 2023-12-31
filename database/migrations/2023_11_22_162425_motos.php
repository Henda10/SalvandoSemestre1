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
        Schema::create('Motos', function (Blueprint $table) {
            $table->id();
            $table->string('Marca');
            $table->integer('Modelo');
            $table->string('NumeroChasis');
            $table->string('Matricula');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Motos');
    }
};
