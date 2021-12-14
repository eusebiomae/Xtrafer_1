<?php

namespace App\Http\Controllers\site\xtrafer;

use App\Http\Controllers\site\xtrafer\_Controller;
use App\Model\api\BlogModel;
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

		$blog_home = BlogModel::orderBy('created_at', 'desc')->limit(1)->get();

		$blog_right = BlogModel::orderBy('created_at', 'asc')->limit(2)->get();

		// return $pageComponents;

		return view('site/pages/default')
			->with('flgPage', $flgPage)
			->with('pageComponents', $pageComponents)
			->with('blog_home', $blog_home)
			->with('blog_right', $blog_right)
			->with('banners', $banners);
	}
}

