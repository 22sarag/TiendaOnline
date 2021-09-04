<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id();

            $table->integer('cantidad_vendida');
            $table->double('precio');
            $table->enum('estado', [0, 1]); // 0 = no disponible, 1 = disponible
            $table->integer('cantidad_disponible');

            $table->unsignedBigInteger('producto_id');

            $table->foreign('producto_id')
                    ->references('id')->on('productos')
                    ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}
