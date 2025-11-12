<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;

    public string $email;

    public string $messageBody;

    /**
     * Create a new message instance.
     */
    public function __construct(string $name, string $email, string $messageBody)
    {
        $this->name = $name;
        $this->email = $email;
        $this->messageBody = $messageBody;
        Log::info('[Contact][Mailable] Constructed mailable', [
            'name' => $this->name,
            'email' => $this->email,
            'message_len' => strlen($this->messageBody),
        ]);
    }

    /**
     * Build the message.
     */
    public function build(): self
    {
        $subject = 'New website enquiry from '.$this->name;
        Log::info('[Contact][Mailable] Building email', [
            'subject' => $subject,
            'reply_to' => $this->email,
        ]);
        return $this
            ->subject($subject)
            ->replyTo($this->email, $this->name)
            ->view('emails.contact');
    }
}
