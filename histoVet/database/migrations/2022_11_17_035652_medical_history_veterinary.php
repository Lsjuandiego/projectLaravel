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
        Schema::create('medicalHistory_veterinary', function (Blueprint $table) {
            $table->id();
            //Agregar las columnas que contendrán los datos foráneos
            $table->bigInteger('veterinary_id')->unsigned();
            $table->bigInteger('medicalHistory_id')->unsigned();
            //Hacer efectivo la relación
            $table->foreign('veterinary_id')->references('id')
                                    ->on('veterinaries')
                                    ->onDelete('cascade');
 
            $table->foreign('clinicalHistory_id')->references('id')
                                    ->on('medicalHistories')
                                    ->onDelete('cascade');
            $table->timestamps();
            $table->unique(['veterinary_id', 'clinicalHistory_id']);
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
