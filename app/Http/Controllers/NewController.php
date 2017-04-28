<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewController extends Controller
{
    public function index()
    {

        $view = 'news.index';

        return view($view);
    }
    public function show($id)
    {
        $new = News::where('id', $id)->first();

        if(empty($new)) {
            abort(404);
            return;
        }



        $view = 'news.detail';


        return view($view, compact('new'));
    }
}
