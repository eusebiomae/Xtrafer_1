<?php

namespace App\Mail;

use App\Model\api\ContactEmailModel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNews extends Mailable
{
	use Queueable, SerializesModels;

	private $news;

	/**
	* Create a new message instance.
	*
	* @return void
	*/
	public function __construct($news)
	{
		$this->news = $news;
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
		->view('site/pages/newsletter')
		->subject('Novo assinante da sua Newsletter')
		->with([ 'news' => $this->news]);
	}


}
