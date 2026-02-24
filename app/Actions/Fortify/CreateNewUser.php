<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
{
    Validator::make($input, [
        'name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'], 
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'telefono' => ['nullable', 'string', 'max:20'],   
        'direccion' => ['nullable', 'string', 'max:500'], 
        'password' => $this->passwordRules(), // Aquí ya se aplica tu regla de mayúsculas y alfanuméricos
        'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
    ])->validate();

    return User::create([
        'name' => $input['name'],
        'last_name' => $input['last_name'], 
        'email' => $input['email'],
        'telefono' => $input['telefono'] ?? null,  
        'direccion' => $input['direccion'] ?? null, 
        'password' => Hash::make($input['password']),
    ]);
}
}
