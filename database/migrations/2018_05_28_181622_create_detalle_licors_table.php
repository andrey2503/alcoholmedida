<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleLicorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_licors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fk_licor');
            $table->integer('abierta');
            $table->integer('tipo_envase');            
            $table->float('peso_total', 8, 2);
            $table->float('peso_util', 8, 2);
            $table->float('peso_actual', 8, 2);
            $table->float('cantidad_tragos', 8, 2);
            $table->foreign('fk_licor')
                    ->references('id')->on('licors')
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
        Schema::dropIfExists('detalle_licors');
    }
}
