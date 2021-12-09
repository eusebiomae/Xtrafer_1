<?php

namespace App\Http\Controllers\site\xtrafer;

use Illuminate\Http\Request;
use App\Model\api\SchoolInformationModel;
use App\Model\api\SlideModel;
use App\Model\api\TeamModel;
use App\Model\api\Configuration\ContentPageModel;
use App\Model\api\Prospection\CourseModel;

class BudgetController extends _Controller
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

        // return $pageComponents;
        return view('site/pages/default')
        ->with('flgPage', $flgPage)
        ->with('pageComponents', $pageComponents);
    }

    public function getPost(Request $request, $id) {

        $flgPage = $request->get('flgPage');

        $pageComponents = ContentPageModel::getByComponent($flgPage);

        $product = CourseModel::find($id);

        // return $blog;

        return view ('site/pages/blog_details')
        ->with('flgPage', $flgPage)
        ->with('pageComponents', $pageComponents)
        ->with('product', $product);
    }

}
