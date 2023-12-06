<?php

namespace App\Http\Controllers\admin;


use App\Models\About;
use App\Mail\MyEmail;
use App\Models\Subscribe;
use App\Models\ContactDetails;
use App\Models\Category;
use App\Models\BusinessListing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{  

    public function front()
    {
        $business_category = Category::withCount('listings')->get();
        $abouts = About::get();
        $listings = BusinessListing::with('amenties', 'reviews' ,'images', 'infos' , 'keywords' , 'menuitems', 'user', 'category')
        ->where('status', 'approve')
        ->where('approval', 'show')
        ->get();
        return view('front.index', compact('business_category',  'abouts', 'listings'));
    }

    public function listingByCategory($id)
    {
        $listings = BusinessListing::with('amenties', 'reviews' ,'images', 'infos' , 'keywords' , 'menuitems', 'user', 'category')
        ->where('status', 'approve')
        ->where('approval', 'show')
        ->where('category_id', $id)
        ->get();
        return view('user.business_listing_author.categoryListing', compact( 'listings'));
    }

    public function emailSend(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' =>'required',
            'message' => 'required',
        ]);

        $senderName = $request->username;
        $phoneNumber = $request->subject;
        $senderEmail = $request->email;

        $email = new MyEmail($senderName, $phoneNumber, $senderEmail);
        Mail::to('teethi.dhar@webart.technology')->send($email);

        return redirect()->back()->with('message', 'Email sent successfully!');
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
        $contact = ContactDetails::get();
        return view('front.contact',  compact('contact'));
    }

    public function subscribeStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        Subscribe::create([
            'user_id' => Auth::user()->id,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('message', 'Email sent successfully!');

    }

    
}
