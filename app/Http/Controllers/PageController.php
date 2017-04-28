<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use App\Template;

class PageController extends Controller
{
    public function index($slug)
    {
        $page = Page::where('id', $slug)->first();
        if(empty($page)) {
            abort(404);
            return;
        }
        $templateId = $page->template_id;


        $view = 'page.index';



        if($templateId){
          $template = Template::find($templateId);
          $view = 'page.'.$template->name;
        }

        return view($view, compact('page'));
    }
}
