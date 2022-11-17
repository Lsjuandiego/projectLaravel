<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diagnostics', function (Blueprint $table) {
            //Agregar la columna que contendrá el dato foráneo
            $table->bigInteger('pet_id')->unsigned();
            //Hacer efectivo la relación
            $table->foreign('pet_id')->references('id')
                                    ->on('pets');

            $table->bigInteger('veterinary_id')->unsigned();
            //Hacer efectivo la relación
            $table->foreign('veterinary_id')->references('id')
                                    ->on('veterinaries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
