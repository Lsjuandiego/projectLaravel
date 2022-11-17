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
        Schema::create('clinicalHistories', function (Blueprint $table) {
            $table->id();
            $table->string ('color');
            $table->string ('weight');
            $table->string ('origin');
            $table->string ('diet');
            $table->string ('previousIllnesses');
            $table->string ('previousSurgeries');
            $table->string ('sterelized');
            $table->string ('nAnimalBirths');
            $table->string ('vaccinationSchedule');
            $table->string ('lastDeworming');
            $table->string ('recentTreatments');
            $table->string ('animalBehavior');
            $table->string ('reasonForConsultation');
            $table->string ('physicalCondition');
            $table->double ('temperature');
            $table->double ('heartFrequency');
            $table->double ('respiratoryFrecuency');
            $table->double ('tllc');
            $table->double ('pulse');
            $table->double ('trcp');
            $table->double ('percentageDehydratation');
            $table->double ('mucous');

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
        //
    }
};
