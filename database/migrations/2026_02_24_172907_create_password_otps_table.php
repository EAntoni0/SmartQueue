<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('password_otps', function (Blueprint $table) {
        $table->id();
        $table->string('identifier'); // Aquí guardaremos el correo o el teléfono
        $table->string('code', 4); // El código de 4 dígitos
        $table->timestamp('expires_at'); // Cuándo caduca el código (ej. en 10 min)
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_otps');
    }
};
