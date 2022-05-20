<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LetAdmin extends Mailable
{
    use Queueable, SerializesModels;
     public $email;
     public $amount;
      public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$amount,$message)
    {
        $this->email = $email;
        $this->amount = $amount;
        $this->message = $message;
    }
   

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.alert-admin');
    }
}
