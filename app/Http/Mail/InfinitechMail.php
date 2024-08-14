<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Message;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InfinitechMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Inquiry from ' . $this->data['name'])
                    ->view('Mail.Inquiry')
                    ->with([
                        'name' => $this->data['name'],
                        'email' => $this->data['email'],
                        'phone' => $this->data['phone'] ?? 'N/A',
                        'message' => $this->data['message'],
                    ]);
    }
}