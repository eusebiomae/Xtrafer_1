<?php

namespace App\Http\Controllers\site\xtrafer;

use App\Http\Controllers\Controller;
use App\Http\Controllers\site\xtrafer\_Controller;
use Illuminate\Http\Request;
use App\Model\api\Configuration\ContentPageModel;
use App\Model\api\Prospection\CourseModel;
use App\Model\api\SchoolInformationModel;
use Illuminate\Support\Facades\DB;

class HomeController extends _Controller
{

	public function index(Request $request)
	{
		$flgPage = $request->get('flgPage');

		$pageComponents = ContentPageModel::getByComponent($flgPage);

		// return $pageComponents;
		return view('site/xtrafer/pages/default')
			->with('flgPage', $flgPage)
			->with('pageComponents', $pageComponents);
	}
}

