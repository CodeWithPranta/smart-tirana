<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        $categories = Category::where('parent_id', null)->get();
        //dd($categories);
        return view('landing', compact('categories'));
    }
}
