<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contact_sent;

    public function __construct($contact_sent)
    {
        $this->contact_sent = $contact_sent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        // dd($this);
        return $this->subject('【AVIOTホームページよりお問い合わせがあります。】'.$this->contact_sent['category'])
                    // ->from('info@v-trade.co.jp')
                    ->view('mails.contact'); 
    }
}
