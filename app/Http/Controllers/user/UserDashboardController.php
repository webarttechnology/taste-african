<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BusinessListing;
use App\Models\Category;
use App\Models\ContactDetails;
use App\Models\User;
use App\Models\Review;
use App\Models\RecentViewListing;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function userDashboard()
    {
        $business_category = Category::withCount('listings')->get();
        $listings = BusinessListing::with('amenties', 'images', 'infos' , 'keywords' , 'menuitems', 'user')
        ->where('status', 'approve')
        ->where('approval', 'show')
        ->paginate(5);
        $title = BusinessListing::select('title')
        ->distinct()->get();
        $contact = ContactDetails::get();
        $states = BusinessListing::where('status', 'approve')
        ->where('approval', 'show')
        ->select('state')
        ->distinct()
        ->get();
        $cities = BusinessListing::where('status', 'approve')
        ->where('approval', 'show')
        ->select('city')
        ->distinct()
        ->get();
        return view ('user.authentication.dashboard', compact('listings', 'contact', 'business_category', 'title', 'states', 'cities'));
    }

    public function categorySearch(Request $request)
    {
        $category = $request->input('category_id');
        
        // Check if category_id is provided and valid
        if ($category) {
            $listings = BusinessListing::where('category_id', $category)->paginate(10);
            $view = view('partials.listings', compact('listings'))->render();

            if ($listings->isEmpty()) {
                return response()->json([
                    'message' => 'No listings found for this category.',
                    'html' => '<p>No listings found.</p>'
                ]);
            }

            return response()->json([
                'message' => 'Category search successful!',
                'html' => $view
            ]);
        } else {
            // Handle case where category_id is not provided
            return response()->json([
                'message' => 'Category ID not provided!',
                'html' => ''
            ], 400); // Return a 400 Bad Request status code
        }
    }


    public function search(Request $request)
    {
        $selectedCategory = $request->input('category_id');
        $selectedState = $request->input('state');
        $selectedCity = $request->input('city');

        $query = BusinessListing::query();

        // Filter by category
        if (!empty($selectedCategory)) {
            $query->where('category_id', $selectedCategory);
        }

        // Filter by state
        if (!empty($selectedState)) {
            $query->where('state', $selectedState);
        }

        // Filter by city
        if (!empty($selectedCity)) {
            $query->where('city', $selectedCity);
        }
       $query->where('approval', 'show')->where('status', 'approve');
        $listings = $query->paginate(30);
        $view = view('partials.listings', compact('listings'))->render();

        // Prepare the response
        $response = [
            'message' => 'Search results fetched successfully!',
            'html' => $view
        ];

        // Return the response as JSON
        return response()->json($response);
    }



    // public function search(Request $request)
    // {
    //     $title = $request->title;
    //     $category = $request->category;
    //     $listings = BusinessListing::where('title', $title)->where('category_id', $category)->paginate(10);
    //     return view('user.authentication.search', compact('listings'));
    // }

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
        $listing = BusinessListing::with('amenties', 'images', 'infos' , 'keywords' , 'menuitems')->find($id);
        $contact = ContactDetails::get();
        $review = Review::with('user')->where('list_id', $id)->get();
       
        return view ('user.business_listing_author.details', compact('listing', 'review', 'contact', 'viewers'));
    }
}
