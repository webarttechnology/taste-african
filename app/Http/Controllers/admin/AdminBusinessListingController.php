<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessListing;

class AdminBusinessListingController extends Controller
{
    public function businessListing()
    {
       $listings = BusinessListing::with('amenties', 'images', 'infos' , 'keywords' , 'menuitems', 'users')->get();
        return view ('admin.business_listing.show' , compact('listings'));
    }
}
