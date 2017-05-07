<?php

namespace App\Http\Controllers;
use TCG\Voyager\Models\Page;
use App\Template;
use App\Photo;
use App\PhotoCategory;

class PageController extends Controller
{
    public function index($slug)
    {
//        $page = Page::where('id', $slug)->first();
        $page = Page::find($slug);
        if(empty($page)) {
            abort(404);
        }
        $templateId = $page->template_id;

        $photoCategory = PhotoCategory::find(2);
        $photos = Photo::where('category_id','2')->orderBy('updated_at', 'desc')->get();

        $view = 'page.index';

        if($templateId){
          $template = Template::find($templateId);
          $view = 'page.'.$template->name;
        }

        return view($view, compact('page','photoCategory','photos'));
    }
}
