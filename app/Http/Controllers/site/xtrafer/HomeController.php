<?php

namespace App\Http\Controllers\site\xtrafer;

use App\Http\Controllers\site\xtrafer\_Controller;
use Illuminate\Http\Request;
use App\Model\api\Configuration\ContentPageModel;
use App\Model\api\SlideModel;

class HomeController extends _Controller
{

	public function index(Request $request)
	{
		$flgPage = $request->get('flgPage');

		$pageComponents = ContentPageModel::getByComponent($flgPage);

		$banners = SlideModel::get();

		// return $pageComponents;

		return view('site/pages/default')
			->with('flgPage', $flgPage)
			->with('pageComponents', $pageComponents)
			->with('banners', $banners);
	}
}

