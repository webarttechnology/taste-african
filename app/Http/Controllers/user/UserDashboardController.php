<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BusinessListing;
use App\Models\User;

class UserDashboardController extends Controller
{
    public function userDashboard()
    {
        $listings = BusinessListing::with('amenties', 'images', 'infos' , 'keywords' , 'menuitems', 'user')->get();

        return view ('user.authentication.dashboard', compact('listings'));
    }

    public function authorDetails($listing_user_id)
    { 
        $listings = BusinessListing::with('amenties', 'images', 'infos' , 'keywords' , 'menuitems')->where('user_id', $listing_user_id)->get();
        $userInfo = User::with('info')->find($listing_user_id);
        return view ('user.business_listing_author.authorDetails', compact('listings', 'userInfo'));
    }

    public function viewDetails($id)
    {
        $listing = BusinessListing::with('amenties', 'images', 'infos' , 'keywords' , 'menuitems')->find($id);
              // return $listings; exit;
        return view ('user.business_listing_author.details', compact('listing'));
    }
}
