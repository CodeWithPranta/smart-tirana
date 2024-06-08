<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        $pages = Page::all();
        $categories = Category::where('parent_id', null)->get();
        //dd($categories);
        return view('landing', compact('categories', 'pages'));
    }

    public function pageDetail($slug)
    {
        $pages = Page::all();
        $categories = Category::where('parent_id', null)->get();
        $page = Page::where('slug', $slug)->first();

        return view('page-view', compact('categories', 'page', 'pages'));
    }
}
