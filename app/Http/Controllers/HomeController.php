<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\PhotoCategory;
use App\Photo;
use TCG\Voyager\Models\Page;
use App\News;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('category_id', '1')->get();

        $photoCategory = PhotoCategory::find(1);
        $photos = Photo::where('category_id','1')->get();
        $pageFour = Page::find(4);
        $news = News::where('category_id','5')->orderBy('updated_at', 'desc')->take(5)->get();
        $view = 'home';
        return view($view,compact('banners','photoCategory','photos','pageFour','news'));
    }

}
