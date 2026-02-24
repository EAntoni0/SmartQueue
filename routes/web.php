<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Importante para el Type Hinting

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// 1. Vista de verificación (Mantenemos tu lógica pero aseguramos la recepción)
Route::get('/verificar-codigo', function (Request $request) {
    // Si no llega nada en la URL, asumimos 'correo'
    $method = $request->query('method', 'correo'); 
    return view('auth.verify-code', compact('method'));
})->name('password.verify-custom');

// 2. Lógica de redirección mejorada
// Ahora leemos qué método envió el formulario para pasarlo en la redirección
Route::post('/forgot-password', function (Request $request) {
    // Obtenemos el método del input hidden que pusimos en los formularios
    $method = $request->input('method', 'correo'); 
    
    return redirect()->route('password.verify-custom', ['method' => $method]);
})->name('password.email');

// 3. Vista de recuperación por SMS
Route::get('/forgot-password-sms', function () {
    return view('auth.forgot-password-sms');
})->name('password.sms');