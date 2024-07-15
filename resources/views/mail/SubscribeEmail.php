<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SubscribeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $senderName;
    public $senderEmail;
    public $phoneNumber;

    /**
     * Create a new message instance.
     */
    public function __construct($senderName, $phoneNumber, $senderEmail)
    {
        $this->senderName = $senderName;
        $this->phoneNumber = $phoneNumber;
        $this->senderEmail = $senderEmail;
        
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thank You For Subscribing with Us!!',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.mail',
        );
    }

    public function build()
    {
        return $this->view('mail.mail')
            ->subject('Subject of the Email');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
