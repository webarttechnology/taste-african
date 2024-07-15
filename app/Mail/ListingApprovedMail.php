<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ListingApprovedMail  extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->view('mail.listing_approved')->subject('Your listing has been approved');
    }
}
