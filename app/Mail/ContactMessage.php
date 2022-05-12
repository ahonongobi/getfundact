<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;
     public $name;
     public $email;
     public $message;
     public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject,$email,$message,$name)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->subject = $subject;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.ContactMessage');
    }
}
