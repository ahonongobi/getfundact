<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LetMeKnow extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $message2;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$message2)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message2 = $message2;
    }
    

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.letmeknow');
    }
}
