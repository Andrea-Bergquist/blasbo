<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    // Vi gör datan tillgänglig för vår Blade-mall
    public array $formData;

    /**
     * Skapa en ny mailable-instans.
     */
    public function __construct(array $formData)
    {
        $this->formData = $formData;
    }

    /**
     * Definiera e-postmeddelandets ämne (Subject) och avsändare.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nytt meddelande från kontaktformuläret: ' . $this->formData['name'],
            replyTo: $this->formData['email'], // Gör att du kan klicka på "Svara" direkt i din e-postklient
        );
    }

    /**
     * Definiera vilken Blade-vy som ska användas för mailet.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
        );
    }
}
