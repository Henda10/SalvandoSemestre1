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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('Descripcion');
            $table->integer('PrecioDelivery');
            $table->string('Estado');
            $table->unsignedBigInteger('fk_clientes')->nullable();
            $table->foreign('fk_clientes')->references('id')->on('Clientes')->onDelete('Cascade');
            $table->unsignedBigInteger('fk_servicios')->nullable();
            $table->foreign('fk_servicios')->references('id')->on('servicios')->onDelete('Cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
