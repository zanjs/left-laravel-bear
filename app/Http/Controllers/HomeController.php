<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\PhotoCategory;
use App\Photo;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('category_id', '1')->get();

        $photoCategory = PhotoCategory::find(1);
        $photos = Photo::where('category_id','1')->get();

        $view = 'home';
        return view($view,compact('banners','photoCategory','photos'));
    }

}
