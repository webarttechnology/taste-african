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
use App\Models\PrivacyPolicy;
use App\Models\TermsCondition;
use App\Models\Blog;
use App\Models\FaqCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

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

        // $states = BusinessListing::select('state')
        // ->distinct()->get();
          $states = BusinessListing::where('status', 'approve')
         ->where('approval', 'show')
         ->select('state')
         ->distinct()
         ->get();
         $blog = Blog::limit(4)->get();
         $cities = BusinessListing::where('status', 'approve')
         ->where('approval', 'show')
         ->select('city')
         ->distinct()
         ->get();
        return view('front.index', compact('business_category',  'abouts', 'listings', 'states', 'blog', 'cities'));
    }

    public function listingByCategory($id)
    {
        $listings = BusinessListing::with('amenties', 'reviews' ,'images', 'infos' , 'keywords' , 'menuitems', 'user', 'category')
        ->where('status', 'approve')
        ->where('approval', 'show')
        ->where('category_id', $id)
        ->get();
        $business_category = Category::withCount('listings')->get();
        $category_id = $id;
        // $listings = BusinessListing::with('amenties', 'images', 'infos' , 'keywords' , 'menuitems', 'user')
        // ->where('status', 'approve')
        // ->where('approval', 'show')
        // ->paginate(5);
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
        return view('user.business_listing_author.categoryListing', compact('category_id', 'listings','contact', 'business_category', 'title', 'states', 'cities'));
    }
    
    public function allListings()
    {
        $listings = BusinessListing::with('amenties', 'reviews' ,'images', 'infos' , 'keywords' , 'menuitems', 'user', 'category')
        ->where('status', 'approve')
        ->where('approval', 'show')
        ->get();     
        $business_category = Category::withCount('listings')->get();
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
        return view('front.business_listing.alllistings', compact( 'listings', 'contact', 'business_category', 'title', 'states', 'cities'));
    }

    public function searchListings()
    {
        $business_category = Category::withCount('listings')->get();
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
        return view('front.search-listings.search', compact( 'listings', 'contact', 'business_category', 'title', 'states', 'cities'));
    }

    public function search(Request $request)
    {     
        $category = $request->search_item;  
        $state = $request->state;
        $city = $request->city;
        $item_category = $request->search_item;
        $listings = BusinessListing::with('amenties', 'reviews' ,'images', 'infos' , 'keywords' , 'menuitems', 'user', 'category')
        ->where('status', 'approve')
        ->where('approval', 'show')
        ->where('state', 'like', '%' . $state . '%')
        ->where('city', 'like', '%' . $city . '%')
        ->where('category_id', $item_category)
        ->get();   
        $states = BusinessListing::where('status', 'approve')
        ->where('approval', 'show')
        ->select('state')
        ->distinct()
        ->get();
        $business_category = Category::get();
        $cities = BusinessListing::select('city')
        ->distinct()->get();
        return view('search-listings.searchresult', compact( 'category','listings', 'item_category', 'business_category', 'cities', 'states', 'city',
        'state'));
    }
    
    public function searchCity($category)
    {       
        $cities = BusinessListing::where('category_id', $category)
        ->pluck('city')
        ->unique()
        ->values();

       return response()->json($cities);
    }

    
    
    public function smartSearch(Request $request)
    {
        if ($request->ajax()) {
            $listings = BusinessListing::with('amenties', 'reviews', 'images', 'infos', 'keywords', 'menuitems', 'user', 'category')
                ->where('status', 'approve')
                ->where('approval', 'show')
                ->where('title', 'LIKE', '%' . $request->name . '%')
                ->get();

            $output = '';

            if (count($listings) > 0) {
                $output .= '<ul class="list-group">';
                foreach ($listings as $listing) {
                    $output .= '<li class="list-group-item test">';
                    $output .= '<a  href="' . route('business_viewDetails', $listing->id) . '">' . $listing->title . '</a>';
                    $output .= '</li>';
                }
                $output .= '</ul>';
            } else {
                $output .= '<li class="list-group-item">No Data Found</li>';
            }

            return response()->json($output);
        }

        return view('front.index');
    }


    public function emailSend(Request $request)
    {
      $request->validate([
        'username' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'subject' => 'required',
        'message' => 'required',
         'g-recaptcha-response' => 'required'
    ]);
    
        $senderName = $request->username;
        $phoneNumber = $request->phone;
        $senderEmail = $request->email;
    
        try {
            $email = new MyEmail($senderName, $phoneNumber, $senderEmail);
    
            $recipients = [$senderEmail, 'info@africanfoodusa.com'];
            Mail::to($recipients)->send($email);
            
            return redirect()->back()->with('message', 'Email sent successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    

    public function about()
    {
        $business_category = Category::withCount('listings')->get();
        $abouts = About::get();
        return view('front.about-us', compact('business_category','abouts'));
    }

    public function blog()
    {
        $blog = Blog::paginate(5);
        return view('front.blog', compact('blog'));
    }
    public function blogDetails($slug)
    {
        $single_blog = Blog::where('slug', $slug)->first();
        return view('front.blog-deatils', compact('single_blog'));
    }

    public function faq()
    {
        $categories = FaqCategory::with('faqs')->get();
        return view('front.faq', compact('categories'));
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

    public function termCondition()
    {
        $terms_condition = TermsCondition::first();
        return view('front.terms-condition',  compact('terms_condition'));
    }

    public function privacyPolicy()
    {
        $privacy = PrivacyPolicy::first();
        return view('front.privacy',  compact('privacy'));
    }



    public function subscribeStore(Request $request)
    {
        
        // if (!Auth::check()) {
        //     return redirect()->route('login')->with('error', 'Please log in first.');
        // }
        $request->validate([
            'email' => 'required|email',
        ]);

        Subscribe::create([
            'user_id' => Auth::check() ? Auth::user()->id : null,
            'email' => $request->email,
        ]);
        $user = Auth::user();
        // $senderName = Auth::user()->name;
        // $phoneNumber = Auth::user()->phone;
        // $senderEmail = $request->email;

        // $email = new SubscribeEmail($senderName, $phoneNumber, $senderEmail);

        // $recipients = [$senderEmail, 'teethi.dhar@webart.technology'];

        // Mail::to($recipients)->send($email);

        return redirect()->back()->with('message', 'Thank you for subscribing with us!');
    }

    
}
