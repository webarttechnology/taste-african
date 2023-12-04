<?php

namespace App\Http\Controllers\admin;

use App\Models\About;
use App\Models\Category;
use App\Models\BusinessListing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
   

    public function front()
    {
        $business_category = Category::withCount('listings')->get();
        $abouts = About::get();
        return view('front.index', compact('business_category',  'abouts'));
    }

    public function about()
    {
        $business_category = Category::withCount('listings')->get();
        $abouts = About::get();
        return view('front.about-us', compact('business_category','abouts'));
    }

    public function blog()
    {
        return view('front.blog');
    }

    public function faq()
    {
        return view('front.faq');
    }

    public function pricing()
    {
        return view('front.pricing');
    }

    public function registerPage()
    {
        return view('admin.sign-up');
    }

    public function contact()
    {
        return view('front.contact');
    }

    
}
