<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicalHistoryVeterinary extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'veterinary_id',
        'medicalHistory_id',
        'created_at',
        'update_at',
    ];
}
