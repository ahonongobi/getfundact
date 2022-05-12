<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Confirmation extends Mailable
{
    use Queueable, SerializesModels;
     public $name;
     public $email;
     public $message;
     public $id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$message,$id)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.campagne')->subject('CAMPAGNE DE FONDS');
    }
}
