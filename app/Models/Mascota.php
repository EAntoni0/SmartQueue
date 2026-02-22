<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    //
    protected $fillable = [
        'user_id',
        'nombre',
        'especie',
        'raza',
        'edad'
    ];

    // Relación con el modelo User

    public function dueño()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
