<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Category;
use App\Models\Event;
use App\Models\Housing;
use App\Models\JobPost;
use App\Models\ListByAdmin;
use App\Models\Listing;
use App\Models\Sell;
use App\Models\Service;
use App\Models\Venue;
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

         // Include the parent category ID in the list of categories to filter
         $categoryIds = $subCategories->pluck('id')->toArray();
         $categoryIds[] = $category->id;


        //dd($slug);
        $services = Service::paginate(10);
        $sells = Sell::paginate(10);
        $jobs = JobPost::paginate(10);
        $venues = Venue::paginate(10);
        $housings = Housing::paginate(10);
        $events = Event::paginate(10);

        //  // Get all ListByAdmin instances with eager loading
        //  $all_list_by_admins = ListByAdmin::with('listing.category')->get();

        //  // Filter ListByAdmin instances by the category name through the Listing relationship
        //  $list_by_admins = $all_list_by_admins->filter(function($listByAdmin) use ($category) {
        //      return $listByAdmin->listing->category->name == $category->name;
        //  });


         // Get all ListByAdmin instances with eager loading
         $all_list_by_admins = ListByAdmin::with('listing.category')
             ->whereHas('listing.category', function($query) use ($categoryIds) {
                 $query->whereIn('id', $categoryIds);
             })
             ->paginate(10);

        //dd($all_list_by_admins);


        return view('categories.main-category', compact('category', 'categories', 'page', 'pages', 'subCategories',
        'services', 'sells', 'jobs', 'venues', 'housings', 'events', 'all_list_by_admins'));
    }

    public function subCategory($subSlug){
        $category = Category::where('slug', $subSlug)->first();
        $pages = Page::all();
        $categories = Category::where('parent_id', null)->get();
        $page = Page::where('slug', $subSlug)->first();

        //dd($slug);
        $services = Service::paginate(10);


        // if ($slug === 'service'){
        //     return view('categories.main-category', compact('category', 'categories', 'page', 'pages', 'subCategories', 'listings'));
        // }

        return view('categories.sub-category', compact('category', 'categories', 'page', 'pages',
        'services'));
    }
}
