<?php

namespace App\Http\Controllers\site\xtrafer;

use Illuminate\Http\Request;
use App\Model\api\SchoolInformationModel;
use App\Model\api\SlideModel;
use App\Model\api\TeamModel;
use App\Model\api\Configuration\ContentPageModel;


class ServiceController extends _Controller
{

	public function index(Request $request)
	{
		$flgPage = $request->get('flgPage');

		$pageComponents = ContentPageModel::getByComponent($flgPage);


		// return $pageComponents;
		// return $flgPage;

		return view('site/pages/default')
		->with('flgPage', $flgPage)
		->with('pageComponents', $pageComponents);
	}
}
