<?php
namespace App\Http\Controllers\site\xtrafer;

use App\Mail\SendMail;
use App\Mail\SendNews;
use App\Mail\SendNewsUser;
use App\Mail\SendQuote;
use App\Model\api\ContactEmailModel;
use App\Model\api\NewsletterModel;
use App\Model\api\QuoteEmailModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends _Controller {

	function contact(Request $request) {

		$contact = new ContactEmailModel();
		$contact->fill($request->all())->save();

		Mail::to('joel.zanata@gigapixel.com.br', 'Contato - Xtrafer')->send(new SendMail($request->all())); //vai para o email da empresa

		return redirect()->back();
	}

	function quote(Request $request) {

		$quote = new QuoteEmailModel();
		$quote->fill($request->all())->save();

		Mail::to('joel.zanata@gigapixel.com.br', 'Orçamento - Xtrafer')->send(new SendQuote($request->all())); //vai para o email da empresa

		return redirect()->back();
	}

	function newsletter(Request $request) {

		$contact = new NewsletterModel();
		$contact->fill($request->all())->save();

		Mail::to('joel.zanata@gigapixel.com.br', 'Nova Newsletter - Xtrafer')->send(new SendNewsUser($request->all())); //vai para o email do cliente
		Mail::to('joel.zanata@gigapixel.com.br', 'Novo Cadastro Newsletter - Xtrafer')->send(new SendNews($request->all())); //vai para o email da empresa

		return redirect()->back();
	}

}
