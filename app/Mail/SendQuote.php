<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendQuote extends Mailable
{
    use Queueable, SerializesModels;

    private $quote;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($quote)
    {
        $this->quote = $quote;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from( config('mail.from.address') )
        ->view('site/pages/quote')
		->subject('Novo Orçamento')
		->with([ 'quote' => $this->quote]);
    }
}
