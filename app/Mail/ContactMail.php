<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)

    {
        $this->data = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()

    {
        // return $this->subject('Mail from ItSolutionStuff.com')
        // ->view('');
        return $this->subject($this->data['subject'])->from($this->data['email'])->view('emails.contact')->with('message', $this->data);


    }
}
