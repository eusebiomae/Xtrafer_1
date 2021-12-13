<?php

namespace App\Http\Controllers\site\xtrafer;

use App\Http\Controllers\site\xtrafer\_Controller;
use Illuminate\Http\Request;
use App\Model\api\Configuration\ContentPageModel;
use App\Model\api\SlideModel;

class TermController extends _Controller
{
	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index(Request $request)
	{
		$flgPage = $request->get('flgPage');

		$pageComponents = ContentPageModel::getByComponent($flgPage);

		return view('site/pages/default')
		->with('flgPage', $flgPage)
		->with('pageComponents', $pageComponents);

	}
}
