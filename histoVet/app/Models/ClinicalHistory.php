<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicalHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'color',
        'create_at',
        'update_at',
        'color',
        'weight',
        'origin',
        'diet',
        'previousIllnesses',
        'previousSurgeries',
        'sterelized',
        'nAnimalBirths',
        'vaccinationSchedule',
        'lastDeworming',
        'recentTreatments',
        'animalBehavior',
        'reasonForConsultation',
        'physicalCondition',
        'temperature',
        'heartFrequency',
        'respiratoryFrecuency',
        'tllc',
        'pulse',
        'trcp',
        'percentageDehydratation',
        'mucous',
    ];

    //Indicar que le pertenece a un usuario
    public function pet(){
        return $this->hasOne(Pet::class);
    }

    public function veterinaries()
    {
        return $this->belongsToMany(Veterinary::class);
    }

}
