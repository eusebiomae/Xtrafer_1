<?php
namespace App\Http\Controllers\site\xtrafer;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends _Controller {

	function contact(Request $request) {
		Mail::to('eusebioaenriquez@gmail.com', 'Contato - Xtrafer')->send(new ContactMail($request->all()));

		return redirect()->back();
	}

}
