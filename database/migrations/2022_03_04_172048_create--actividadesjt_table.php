<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesjtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Añadido
        Schema::create('actividadesjt', function(Blueprint $table){
            $table->increments('id')->index();
            $table->string('name');
            $table->string('tipo');
            $table->string('fecha');
            $table->timestamp('created_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::dropIfExists('bdactividadesjt');
    }
}
