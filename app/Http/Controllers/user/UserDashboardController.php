<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BusinessListing;
use App\Models\ContactDetails;
use App\Models\User;
use App\Models\Review;
use App\Models\RecentViewListing;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function userDashboard()
    {
        $listings = BusinessListing::with('amenties', 'images', 'infos' , 'keywords' , 'menuitems', 'user')
        ->where('status', 'approve')
        ->where('approval', 'show')
        ->paginate(5);
        $contact = ContactDetails::get();
        return view ('user.authentication.dashboard', compact('listings', 'contact'));
    }

    public function authorDetails($listing_user_id)
    { 
        $listings = BusinessListing::with('amenties', 'reviews', 'images', 'infos' , 'keywords' , 'menuitems')->where('user_id', $listing_user_id)->paginate(5);
        $userInfo = User::with('info')->find($listing_user_id);
        $contact = ContactDetails::get();
        return view ('user.business_listing_author.authorDetails', compact('listings', 'userInfo', 'contact'));
    }

    public function viewDetails($id)
    {
       $views =  RecentViewListing::create([
            'user_id' => Auth::user()->id,
            'list_id' => $id,
        ]);

        $viewers = $views->with('user', 'list.infos', 'list.images')->limit(4)->get();
       //return      $viewers; exit;
        $listing = BusinessListing::with('amenties', 'images', 'infos' , 'keywords' , 'menuitems')->find($id);
        $contact = ContactDetails::get();
        $review = Review::with('user')->where('list_id', $id)->get();
       
        return view ('user.business_listing_author.details', compact('listing', 'review', 'contact', 'viewers'));
    }
}
