<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'sex',
        'age',
        'breed',
        'specie',
        'created_at',
        'updated_at'
    ];

    //Indicar que le pertenece a un usuario
    public function clinicalHistory(){
        return $this->hasOne(ClinicalHistory::class, 'pet_id');
    }

    public function diagnostics(){
        return $this->hasMany(Diagnostic::class, 'diagnostic_id');
        
    }

    public function petOwner(){
        return $this->belongsTo(PetOwner::class);
    }
}
