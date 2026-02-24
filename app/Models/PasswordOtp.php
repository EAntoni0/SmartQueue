<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordOtp extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier',
        'code',
        'expires_at',
    ];

    // Esto le dice a Laravel que trate 'expires_at' como un objeto de fecha (Carbon)
    protected $casts = [
        'expires_at' => 'datetime',
    ];

    // Función rápida para saber si el código ya expiró
    public function isExpired(): bool
    {
        return now()->greaterThan($this->expires_at);
    }
}