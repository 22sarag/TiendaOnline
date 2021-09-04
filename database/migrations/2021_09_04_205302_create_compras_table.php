<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();

            $table->string('nombre_producto');
            $table->string('nombre_proveedor');
            $table->integer('cantidad');
            $table->double('precio_compra');
            $table->double('precio_venta');
            $table->bigInteger('nro_factura');

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('producto_id');

            $table->foreign('producto_id')
                    ->references('id')->on('productos')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('proveedor_id');

            $table->foreign('proveedor_id')
                    ->references('id')->on('proveedors')
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
        Schema::dropIfExists('compras');
    }
}
