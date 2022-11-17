<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'id',
        'description',
        'created_at',
        'update_at',
    ];

    //Indicar que le pertenece a un usuario
    public function veterinary(){
        return $this->belongsTo(Veterinary::class);
    }

    public function pet(){
        return $this->belongsTo(Pet::class);
    }
}
