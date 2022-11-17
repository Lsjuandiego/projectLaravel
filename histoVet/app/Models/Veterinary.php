<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinary extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'phone',
        'created_at',
        'updated_at'
    ];

    //Indicar que le pertenece a un usuario
    public function diagnostics(){
        return $this->hasMany(Diagnostic::class, 'diagnostic_id');
        
    }

    public function clinicalHistories()
    {
        return $this->belongsToMany(ClinicalHistory::class);
    }
}
