<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class NewController extends Controller
{
    public function index($id)
    {
        $category = Category::find($id);
        if(empty($category)) {
            abort(404);
        }
        $news = News::where('category_id',$category->id)->get();
        $view = 'news.index';

        return view($view,compact('news','category'));
    }
    public function show($id)
    {
        $new = News::find($id);

        if(empty($new)) {
            abort(404);
        }

        $view = 'news.detail';


        return view($view, compact('new'));
    }
}
