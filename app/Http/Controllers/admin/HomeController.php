<?php

namespace App\Http\Controllers\admin;


use App\Models\About;
use App\Mail\MyEmail;
use App\Models\ContactDetails;
use App\Models\Category;
use App\Models\BusinessListing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $contact = ContactDetails::get();
        return view('front.index', compact('business_category',  'abouts', 'listings', 'contact'));
    }

    public function listingByCategory($id)
    {
        $listings = BusinessListing::with('amenties', 'reviews' ,'images', 'infos' , 'keywords' , 'menuitems', 'user', 'category')
        ->where('status', 'approve')
        ->where('approval', 'show')
        ->where('category_id', $id)
        ->get();
        $contact = ContactDetails::get();
        return view('user.business_listing_author.categoryListing', compact( 'listings', 'contact'));
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
        $contact = ContactDetails::get();
        return view('front.about-us', compact('business_category','abouts', 'contact'));
    }

    public function blog()
    {
        $contact = ContactDetails::get();
        return view('front.blog' , compact('contact'));
    }

    public function faq()
    {
        $contact = ContactDetails::get();
        return view('front.faq', compact('contact'));
    }

    public function pricing()
    {
        $contact = ContactDetails::get();
        return view('front.pricing', compact('contact'));
    }

    public function registerPage()
    {
        $contact = ContactDetails::get();
        return view('admin.sign-up', compact('contact'));
    }

    public function contact()
    {
        $contact = ContactDetails::get();
        return view('front.contact', compact('contact'));
    }

    
}
