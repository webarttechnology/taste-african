<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessListing;

class AdminBusinessListingController extends Controller
{
    public function businessListing()
    {
       $listings = BusinessListing::with('amenties', 'images', 'infos' , 'keywords' , 'menuitems', 'user')->get();
        return view ('admin.business_listing.show' , compact('listings'));
    }

    public function statusChange(Request $request)
    {
        $listings = BusinessListing::find($request->listingId);     
        
        
        if($request->status == 'approved')
        {
            $listings->status = 'approve';
        }
        elseif($request->status == 'reject')
        {
            $listings->status = 'reject';
        }
        else 
        {
            return response()->json(['success' => false]);
        }

        $listings->save();
        return response()->json(['success' => true, 'status' => $listings->status]);      

    }
}
