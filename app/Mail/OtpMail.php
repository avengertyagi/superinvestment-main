<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OtpMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $Otp = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Otp)
    {
        $this->Otp = $Otp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.otp', ['otp' => $this->Otp]);
    }
}
