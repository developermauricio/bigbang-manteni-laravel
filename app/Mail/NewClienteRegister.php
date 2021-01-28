<?php

namespace App\Mail;

use App\Information;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewClienteRegister extends Mailable
{
    use Queueable, SerializesModels;
    private $email;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject(__(config('app.name')))
            ->markdown('emails.themes-clients.new-client-register')
            ->with('email',$this->email);

    }
}