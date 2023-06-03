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
        Schema::create('libros', function (Blueprint $table) {
            //  Borrado en cascada
            $table->engine = 'InnoDB';
            //  Estructura de la tabla
            $table->bigIncrements('id');
            $table->string('nombre', 255);
            $table->bigInteger('categoria_id')->unsigned();//Tendra una Relacion
            $table->timestamps();
            //  Claves foraneas
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');//  Borrado en cascada
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
