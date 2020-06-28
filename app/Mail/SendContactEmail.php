<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@pippas40th.com', 'Pippas 40th Messaging System')
        ->subject('Your Email has been received and stored')
        ->markdown('emails.SendContactEmail');
    //    ->with([
    //        'email' => $this->info['email'],
    //    ]);

    
    }
}
