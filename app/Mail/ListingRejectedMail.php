<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ListingRejectedMail  extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->view('mail.listing_rejected')->subject('Your listing has been rejected');
    }
}
