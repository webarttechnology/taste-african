<?php

namespace App\Http\Controllers\business;

use App\Models\Category;
use App\Models\Amenity;
use App\Models\BusinessListing;
use App\Models\BusinessListingAmenities;
use App\Models\BusinessListingInfo;
use App\Models\BusinessListingKeywords;
use App\Models\BusinessListingMenuitems;
use App\Models\BusinessListingImages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BusinessListingController extends Controller
{
    public function businessListing()
    {       
        $listings = BusinessListing::with('amenties', 'images', 'infos', 'keywords', 'menuitems')
            ->where('user_id', Auth::guard('web')->id())
            // ->where('approval', 'show')
            ->get();
        return view('front.business_listing.show', compact('listings'));
    }

    public function add()
    {
        $amenities = Amenity::get();
        $categories = Category::get();
        return view('front.business_listing.add', compact('categories', 'amenities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'zip_code' => 'required|string',
            'mobile' => 'required|string|max:10',
            'email' => 'required|email|max:255',
            'website' => 'nullable|url|max:255',
            'facebook' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'keywords' => 'required',
            // 'menu_item_name' => 'required|string|max:255',
            // 'menu_item_category' => 'required|string',
            // 'menu_item_price' => 'required|numeric|max:255',
            // 'menu_item_about' => 'required|string|max:655',
            // 'menu_item_image' => 'required|image',
        ]);

        // Business Listing Add
        $business_listing = BusinessListing::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'approval' => $request->approval,
            'category_id' => $request->category,
            'description' => $request->description,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'state' => $request->state,
            'city' => $request->city,
            'address' => $request->address,
            'zip_code' => $request->zip_code,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'website' => $request->website,
        ]);

        // Business Listing Info Add
        BusinessListingInfo::create([
            'business_listing_id' => $business_listing->id,
            'monday_opening_time' => $request->monday_opening_time,
            'monday_closing_time' => $request->monday_closing_time,
            'tuesday_opening_time' => $request->tuesday_opening_time,
            'tuesday_closing_time' => $request->tuesday_closing_time,
            'wednesday_opening_time' => $request->wednesday_opening_time,
            'wednesday_closing_time' => $request->wednesday_closing_time,
            'thursday_opening_time' => $request->thursday_opening_time,
            'thursday_closing_time' => $request->thursday_closing_time,
            'friday_opening_time' => $request->friday_opening_time,
            'friday_closing_time' => $request->friday_closing_time,
            'saturday_opening_time' => $request->saturday_opening_time,
            'saturday_closing_time' => $request->saturday_closing_time,
            'sunday_opening_time' => $request->sunday_opening_time,
            'sunday_closing_time' => $request->sunday_closing_time,
            'opening_all_time' => $request->opening_all_time,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);

        // Business Listing Keywords Add
        $keywords = json_decode($request->keywords, true);

        if (!empty($keywords)) {
            foreach ($keywords as $keyword) {
                $keywordValue = $keyword['value'];

                if (!is_null($keywordValue)) {
                    BusinessListingKeywords::create([
                        'business_listing_id' => $business_listing->id,
                        'keywords' => $keywordValue,
                    ]);
                }
            }
        }

        // Business Listing Amenity Add
        $amenity = $request->amenities;

        foreach ($amenity as $amenity) {
            BusinessListingAmenities::create([
                'business_listing_id' => $business_listing->id,
                'amenities' => $amenity,
            ]);
        }

        // Business Listing Menu Add
        $menu_items = $request->input('menu_item_name');
        $menu_category = $request->input('menu_item_category');
        $menu_price = $request->input('menu_item_price');
        $menu_itemsDetails = $request->input('menu_item_about');
        $menuItemImageData = $request->file('menu_item_image');

        for ($i = 0; $i < count($menu_items); $i++) {
            $menu = BusinessListingMenuitems::create([
                'business_listing_id' => $business_listing->id,
                'item_name' => is_array($menu_items) ? $menu_items[$i] : $menu_items,
                'category' => is_array($menu_category) ? $menu_category[$i] : $menu_category,
                'price' => is_array($menu_price) ? $menu_price[$i] : $menu_price,
                'about_item' => is_array($menu_itemsDetails) ? $menu_itemsDetails[$i] : $menu_itemsDetails,
            ]);

            // Upload and store the image
            if ($request->hasFile('menu_item_image') && isset($menuItemImageData[$i]) && $menuItemImageData[$i]->isValid()) {
                $image = 'images/MenuItems/' . time() . $i . '.' . $menuItemImageData[$i]->extension();
                $menuItemImageData[$i]->move('images/MenuItems', $image);
                $menu->image = $image;
                $menu->save();
            }
        }

        // Business Listing Images Add
        $business_images = $request->image;
        foreach ($business_images as $images) {
            $imageName = 'images/Business_Images/' . time() . '_' . $images->getClientOriginalName();
            $images->move('images/Business_Images', $imageName);
            BusinessListingImages::create([
                'business_listing_id' => $business_listing->id,
                'images' => $imageName,
            ]);
        }
        return redirect()
            ->route('business_listing')
            ->with('message', 'Data Saved Successfully!!!');
    }

    public function viewDetails($id)
    {
        $listing = BusinessListing::with('amenties', 'images', 'infos', 'keywords', 'menuitems')
            ->where('id', $id)
            ->first();
        //return $listing ; exit;
        return view('front.business_listing.listing-detail', compact('listing'));
    }

    public function edit($id)
    {
        $categories = Category::get();
        $amenities = Amenity::get();
        $listing = BusinessListing::with('amenties', 'images', 'infos', 'keywords', 'menuitems')
            ->where('id', $id)
            ->first();
        
        $keywords =  '';
        foreach ($listing->keywords as $keyword)
        {
            $keywords .= ", " . $keyword->keywords;
        }
        return view('front.business_listing.update', compact('listing', 'keywords', 'categories', 'amenities'));
    }

    public function deleteImage(Request $request)
    {
        $imageId = $request->input('image_id');

        // Find and delete the image from the database
        $image = BusinessListingImages::find($imageId);

        // $oldImagePath = public_path('images/banner/' . $banner->image);

        // if (file_exists($oldImagePath)) {
        //     unlink($oldImagePath);
        // }

        if ($image) {
            $image->delete();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }

    public function update(Request $request, $id)
    {
        $business_listing = BusinessListing::with('amenties', 'images', 'infos', 'keywords', 'menuitems')
            ->where('id', $id)
            ->first();


             // Business Listing Keywords Add
            $keywords = json_decode($request->keywords, true);
            $business_listing->keywords()->delete();
            foreach ($keywords as $keyword) {
                $keywordValue = $keyword['value'];

                if (!is_null($keywordValue)) {
                    BusinessListingKeywords::create([
                        'business_listing_id' => $business_listing->id,
                        'keywords' => $keywordValue,
                    ]);
                }
            }
        


        // Business Listing Update
        $business_listing->update([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'approval' => $request->approval,
            'category' => $request->category,
            'description' => $request->description,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'state' => $request->state,
            'city' => $request->city,
            'address' => $request->address,
            'zip_code' => $request->zip_code,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'website' => $request->website,
        ]);

        //Business Listing Info Update
        $business_listing->infos->update([
            'monday_opening_time' => $request->monday_opening_time,
            'monday_closing_time' => $request->monday_closing_time,
            'tuesday_opening_time' => $request->tuesday_opening_time,
            'tuesday_closing_time' => $request->tuesday_closing_time,
            'wednesday_opening_time' => $request->wednesday_opening_time,
            'wednesday_closing_time' => $request->wednesday_closing_time,
            'thursday_opening_time' => $request->thursday_opening_time,
            'thursday_closing_time' => $request->thursday_closing_time,
            'friday_opening_time' => $request->friday_opening_time,
            'friday_closing_time' => $request->friday_closing_time,
            'saturday_opening_time' => $request->saturday_opening_time,
            'saturday_closing_time' => $request->saturday_closing_time,
            'sunday_opening_time' => $request->sunday_opening_time,
            'sunday_closing_time' => $request->sunday_closing_time,
            'opening_all_time' => $request->opening_all_time,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);

        // Update Business amenities
        $amenities = $request->amenities;
        $business_listing->amenties()->delete();

        foreach ($amenities as $amenity) {
            BusinessListingAmenities::updateOrCreate(['business_listing_id' => $business_listing->id, 'amenities' => $amenity], ['amenities' => $amenity]);
        }
        // Update Business amenities

        // Update Business Images
        $business_images = $request->image;

        if (is_array($business_images)) {
            foreach ($business_images as $image) {
                if ($image && $image->isValid()) {
                    $imageName = 'images/Business_Images/' . time() . '_' . $image->getClientOriginalName();
                    $image->move('images/Business_Images', $imageName);

                    BusinessListingImages::updateOrCreate([
                        'business_listing_id' => $business_listing->id,
                        'images' => $imageName,
                    ]);
                }
            }
        } else {
            if ($business_images && $business_images->isValid()) {
                $imageName = 'images/Business_Images/' . time() . '_' . $business_images->getClientOriginalName();
                $business_images->move('images/Business_Images', $imageName);

                BusinessListingImages::updateOrCreate([
                    'business_listing_id' => $business_listing->id,
                    'images' => $imageName,
                ]);
            }
        }
        // Update Business Images

        // Business Listing Menu Add
        $menu_items = $request->input('menu_item_name');
        $menu_category = $request->input('menu_item_category');
        $menu_price = $request->input('menu_item_price');
        $menu_itemsDetails = $request->input('menu_item_about');
        $menuItemImageData = $request->file('menu_item_image');

        $business_listing->menuitems()->delete();
        for ($i = 0; $i < count($menu_items); $i++) {
            $menu = BusinessListingMenuitems::create([
                'business_listing_id' => $id,
                'item_name' => is_array($menu_items) ? $menu_items[$i] : $menu_items,
                'category' => is_array($menu_category) ? $menu_category[$i] : $menu_category,
                'price' => is_array($menu_price) ? $menu_price[$i] : $menu_price,
                'about_item' => is_array($menu_itemsDetails) ? $menu_itemsDetails[$i] : $menu_itemsDetails,
            ]);

            // Upload and store the image
            if ($request->hasFile('menu_item_image') && isset($menuItemImageData[$i]) && $menuItemImageData[$i]->isValid()) {
                $image = 'images/MenuItems/' . time() . $i . '.' . $menuItemImageData[$i]->extension();
                $menuItemImageData[$i]->move('images/MenuItems', $image);
                $menu->image = $image;
            } elseif (isset($request->menu_item_image_old[$i])) {
                $menu->image = $request->menu_item_image_old[$i];
            }

            $menu->save();
        }

        

        return redirect()
            ->route('business_listing')
            ->with('message', 'Data Saved Successfully!!!');
    }

    public function delete($id)
    {
        $businessListing = BusinessListing::findOrFail($id);

        BusinessListingMenuitems::where('business_listing_id', $id)->delete();
        BusinessListingImages::where('business_listing_id', $id)->delete();
        BusinessListingAmenities::where('business_listing_id', $id)->delete();
        BusinessListingKeywords::where('business_listing_id', $id)->delete();
        BusinessListingInfo::where('business_listing_id', $id)->delete();
        $businessListing->delete();

        return redirect()->route('business_listing')->with('message', 'Data Deleted Successfully!!!');
    }

    

}
