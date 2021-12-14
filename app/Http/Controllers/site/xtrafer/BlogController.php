<?php

namespace App\Http\Controllers\site\xtrafer;

use App\Model\api\BlogModel;
use Illuminate\Http\Request;
use App\Model\api\Configuration\ContentPageModel;
use App\Model\api\FeatureModel;
use App\Model\api\Prospection\CourseModel;
use App\Model\api\SlideModel;

class BlogController extends _Controller
{

	public function index(Request $request)
	{
		$flgPage = $request->get('flgPage');

		$pageComponents = ContentPageModel::getByComponent($flgPage);

		$blogs = BlogModel::with(['blogCategory' => function($query){$query->select('id', 'description_pt');}])->orderBy('created_at', 'desc')->get();

		$blog_home = BlogModel::orderBy('created_at', 'desc')->limit(2)->get();

		$blog_right = BlogModel::orderBy('created_at', 'asc')->limit(2)->get();

		// return $pageComponents;
		return view('site/pages/default')
			->with('flgPage', $flgPage)
			->with('pageComponents', $pageComponents)
			->with('blog_home', $blog_home)
			->with('blog_right', $blog_right)
			->with('blogs', $blogs);
	}

	public function getPost(Request $request, $id) {

		$flgPage = $request->get('flgPage');

		$pageComponents = ContentPageModel::getByComponent($flgPage);

		$blog = BlogModel::find($id);


		// return $pageComponents;

		return view ('site/pages/blog_details')
		->with('flgPage', $flgPage)
		->with('pageComponents', $pageComponents)
		->with('blog', $blog);
	}

	public function blog(Request $request, $id)
	{
			$courseModel = CourseModel::with(['courseCategory', 'courseCategoryType', 'courseSubcategory'])->find($id);
			//$courseModel = CourseModel::where('id', $id)->first();

			$flgPage = $request->get('flgPage');
			$pageComponents = ContentPageModel::getByComponent($flgPage);

			$features = FeatureModel::select('id', 'title', 'icon', 'description', 'content_page_id')->whereHas('contentPage', function ($query) use ($flgPage) {
		$query->where('flg_page', $flgPage);
			})->get();

			$banner = SlideModel::whereHas('contentPage', function ($query) use ($flgPage) {
					$query->where('flg_page', $flgPage);
			})->get();

			foreach ($pageComponents->contentSection as $section) {
					if ($section->component == 'blog') {
							$section->content[] = $courseModel;
							break;
					}
			}

		 $banner[0]->title_pt = $courseModel->title_pt;

			return view('site/pages/default')
			->with('banner', $banner)
			->with('course', $courseModel)
			->with('features', $features)
			->with('pageComponents', $pageComponents);

	}

}
