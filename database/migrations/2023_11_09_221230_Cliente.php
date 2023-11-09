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
        Schema::create('Clientes',function(Blueprint $table){
            $table->id();
            $table->string('Primernombre',15);
            $table->string('Segundonombre',15);
            $table->string('PrimerApellido',15);
            $table->string('SegundoApellido',15);
            $table->string('Direccion',60);
            $table->integer('Celular',8);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Clientes');
    }
};
