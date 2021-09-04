<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoLaboralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo_laborals', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->text('descripcion');
            $table->double('salario');

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')
                    ->references('id')->on('users')
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
        Schema::dropIfExists('cargo_laborals');
    }
}
