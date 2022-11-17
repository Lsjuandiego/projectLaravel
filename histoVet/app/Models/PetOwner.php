<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetOwner extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'phone',
        'email',
        'address'
    ];

    //Indicar que le pertenece a un usuario
    public function pets()
    {
        return $this->hasMany(Pet::class);
    }

}
