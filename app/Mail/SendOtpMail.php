<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendOtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $code; // Variable para almacenar el código

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Código de recuperación - VeteriMid', // Asunto del correo
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.otp', // La vista que crearemos ahora
        );
    }
}