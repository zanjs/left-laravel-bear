<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\PhotoCategory;
use App\Photo;
use TCG\Voyager\Models\Page;
use App\News;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        //广告 banner
        $banners = Banner::where('category_id', '1')->get();
        $photoCategory = PhotoCategory::find(1);
        // 照片墙
        $photos = Photo::where('category_id','1')->get();
        //联盟体系内容
        $pageFour = Page::find(4);
        //航海文化
        $news = News::where('category_id','5')->orderBy('updated_at', 'desc')->take(5)->get();
        //帆船行业动态新闻
        $whatNews = News::where('category_id','2')->orderBy('updated_at', 'desc')->take(5)->get();
        //帆船行业动态栏目
        $categoryTwo = Category::find(2);
        $view = 'home';
        return view($view,compact('banners','photoCategory','photos','pageFour','news','whatNews','categoryTwo'));
    }

}
