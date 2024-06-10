<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Category;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index($slug){
        $category = Category::where('slug', $slug)->first();
        $pages = Page::all();
        $categories = Category::where('parent_id', null)->get();
        $page = Page::where('slug', $slug)->first();

        // Get subcategories where parent_id matches the main category ID
        $subCategories = Category::where('parent_id', $category->id)->get();

        return view('categories.main-category', compact('category', 'categories', 'page', 'pages', 'subCategories'));
    }
}
