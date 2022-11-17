<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicalHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'color',
        'create_at',
        'update_at',
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
        'pet_id'
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
