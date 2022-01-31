<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CancelMail extends Mailable
{
    use Queueable, SerializesModels;

    public $cancels;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cancels)
    {
        $this->cancels = $cancels;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Courier Request is Cancelled')->view('admin.layout.Email.cancel-mail');;
    }
}
