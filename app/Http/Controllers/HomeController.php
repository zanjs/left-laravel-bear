<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('category_id', '1')->get();

        $view = 'home';
        return view($view,compact('banners'));
    }

}
