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
        Schema::create('alumnos_clases', function (Blueprint $table) {
            $table->string("idClases");
            $table->string("calificacion")->nullable();
            $table->string('noctrl',8);
            $table->foreign('noctrl')->references('noctrl')->on('alumnos');
            $table->string('idGrupo',15);
            $table->foreign('idGrupo')->references('idGrupo')->on('grupos');
            $table->timestamps();
        });
    } 

    
    public function down(): void
    {
        Schema::dropIfExists('alumnos_clases');
    }
};
