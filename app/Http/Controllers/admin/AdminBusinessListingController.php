<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessListing;
use Illuminate\Support\Facades\Mail;
use App\Mail\ListingApprovedMail;
use App\Mail\ListingRejectedMail;
use Illuminate\Support\Facades\Log;

class AdminBusinessListingController extends Controller
{
    public function businessListing()
    {
       $listings = BusinessListing::with('amenties', 'images', 'infos' , 'keywords' , 'menuitems', 'user')->paginate(5);
        return view ('admin.business_listing.show' , compact('listings'));
    }

    public function statusChange(Request $request)
    {
        $listings = BusinessListing::find($request->listingId);
        $business_owner_email = BusinessListing::where('id', $request->listingId)->value('email');

        try {
            if ($request->status == 'approved') {

                $listings->status = 'approve';
                $listings->save();
                $recipients = [$business_owner_email];
                Mail::to($recipients)->send(new ListingApprovedMail());
                return response()->json(['success' => true, 'status' => $listings->status]); 
                
            } elseif ($request->status == 'reject') {

                $listings->status = 'reject';
                $listings->save();
                $recipients = [$business_owner_email];
                Mail::to($recipients)->send(new ListingRejectedMail());
                return response()->json(['success' => true, 'status' => $listings->status]); 

            } else {
                return response()->json(['success' => false]);
            }

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => 'Error occurred while processing the request.']);
        }
    }

   

}
