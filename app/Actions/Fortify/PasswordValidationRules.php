<?php

namespace App\Actions\Fortify;

use Illuminate\Validation\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    protected function passwordRules(): array
    {
        return [
            'required',
            'string',
            'min:8',             // contraseña de al menos 8 caracteres
            'alpha_num',         // solo alfanuméricos, sin caracteres especiales
            'regex:/[A-Z]/',     // una mayúscula al menos
            'confirmed',         // ver que el campo de confirmación coincida
        ];
    }
}
