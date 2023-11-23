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
        Schema::create('motocicle_guys', function (Blueprint $table) {
            $table->id();
            $table->string('Primernombre');
            $table->string('Segundonombre');
            $table->string('PrimerApellido');
            $table->string('SegundoApellido');
            $table->integer('Numero');
            $table->unsignedBigInteger('fk_motos')->nullable();
            $table->foreign('fk_motos')->references('id')->on('motos')->onDelete('Cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motocicle_guys');
    }
};
