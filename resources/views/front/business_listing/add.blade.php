@extends('front.layout.app')
@section('content')

    <!-- =============================== Dashboard Header ========================== -->
    <section class="bg-cover position-relative" style="background:url({{asset('front/img/cover.jpg')}}) no-repeat #C90000;">
        <div class="abs-list-sec"><a href="{{route ('business_listing')}}" class="add-list-btn"><i class="fas fa-plus me-2"></i>All Listing</a></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        
                    <div class="dashboard-head-author-clicl">
                        <div class="dashboard-head-author-thumb">
                            <img src="{{asset('front/img/t-7.png')}}" class="img-fluid" alt="" />
                        </div>
                        <div class="dashboard-head-author-caption">
                            <div class="dashploio"><h4>{{ Auth::user()->name }}</h4></div>
                            {{-- <div class="dashploio"><span class="agd-location"><i class="lni lni-map-marker me-1"></i>San Francisco, USA</span></div>
                            <div class="listing-rating high"><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i></div> --}}
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </section>
    <!-- =============================== Dashboard Header ========================== -->

    <!-- ======================= Dashboard Detail ======================== -->
    <div class="goodup-dashboard-wrap gray px-4 py-5">
        <a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false"
            aria-controls="MobNav">
            <i class="fas fa-bars me-2"></i>Dashboard Navigation</a>
            @include('front.layout.sidebar')

        <div class="goodup-dashboard-content">
            <div class="dashboard-tlbar d-block mb-5">
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12">
                        <h1 class="ft-medium">Add Listing</h1>
                    </div>
                </div>
            </div>

            <div class="dashboard-widg-bar d-block">
                <div class="row">
                    <div class="col-xl-12 col-lg-2 col-md-12 col-sm-12">
                        <form action="{{ route('business_listing_store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="submit-form">
                                <!-- Listing Info -->
                                <div class="dashboard-list-wraps bg-white rounded mb-4">
                                    <div class="dashboard-list-wraps-head br-bottom py-3 px-3">
                                        <div class="dashboard-list-wraps-flx">
                                            <h4 class="mb-0 ft-medium fs-md"><i
                                                    class="fa fa-file me-2 theme-cl fs-sm"></i>Listing Info</h4>
                                        </div>
                                    </div>

                                    <div class="dashboard-list-wraps-body py-3 px-3">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Listing Title</label>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="title" value="{{ old('title') }}" />
                                                    <div class="validation-error">
                                                        @error('title')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Categories</label>
                                                    <select class="form-control"name="category"
                                                        value="{{ old('category') }}">
                                                        <option>---- Select ----</option>
                                                        @foreach ($categories as $category)
                                                            <option>{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="validation-error">
                                                        @error('category')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Keywords</label>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        id="keywords" name="keywords" value="{{ old('') }}" />
                                                    <div class="validation-error">
                                                        @error('keywords')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">About Listing</label>
                                                    <textarea class="form-control rounded ht-150" placeholder="" name="description" value="{{ old('description') }}"></textarea>
                                                    <div class="validation-error">
                                                        @error('description')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Location Info -->
                                <div class="dashboard-list-wraps bg-white rounded mb-4">
                                    <div class="dashboard-list-wraps-head br-bottom py-3 px-3">
                                        <div class="dashboard-list-wraps-flx">
                                            <h4 class="mb-0 ft-medium fs-md"><i
                                                    class="fas fa-map-marker-alt me-2 theme-cl fs-sm"></i>Location Info
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="dashboard-list-wraps-body py-3 px-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Latitude</label>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="latitude" value="{{ old('latitude') }}" />
                                                    <div class="validation-error">
                                                        @error('latitude')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Longitude</label>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="longitude" value="{{ old('longitude') }}" />
                                                    <div class="validation-error">
                                                        @error('longitude')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27437.803590312993!2d76.75937213955079!3d30.726117899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feda9761bdc2f%3A0x5e764f7f18edc390!2sMidpoint%20Cafe!5e0!3m2!1sen!2sin!4v1649569611177!5m2!1sen!2sin"
                                                        class="full-width" height="300" style="border:0;"
                                                        allowfullscreen="" loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">State</label>
                                                    <input type="text" class="form-control rounded" name="state"
                                                        value="{{ old('state') }}" />
                                                    <div class="validation-error">
                                                        @error('state')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">City</label>
                                                    <input type="text" class="form-control rounded" name="city"
                                                        value="{{ old('city') }}" />
                                                    <div class="validation-error">
                                                        @error('city')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Address</label>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="address" value="{{ old('address') }}" />
                                                    <div class="validation-error">
                                                        @error('address')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Zip Code</label>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="zip_code" value="{{ old('zip_code') }}" />
                                                    <div class="validation-error">
                                                        @error('zip_code')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Mobile</label>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="mobile" value="{{ old('mobile') }}" />
                                                    <div class="validation-error">
                                                        @error('mobile')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Email</label>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="email" value="{{ old('email') }}" />
                                                    <div class="validation-error">
                                                        @error('email')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Website</label>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="website" value="{{ old('website') }}" />
                                                    <div class="validation-error">
                                                        @error('website')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Amenties Options -->
                                <div class="dashboard-list-wraps bg-white rounded mb-4">
                                    <div class="dashboard-list-wraps-head br-bottom py-3 px-3">
                                        <div class="dashboard-list-wraps-flx">
                                            <h4 class="mb-0 ft-medium fs-md"><i
                                                    class="lni lni-coffee-cup me-2 theme-cl fs-sm"></i>Amenties Options
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="dashboard-list-wraps-body py-3 px-3">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="Goodup-all-features-list">
                                                    <ul>
                                                        <li>
                                                            <input id="am1" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox"
                                                                value="Health Score 8.7 / 10">
                                                            <label for="am1" class="checkbox-custom-label">Health
                                                                Score 8.7 / 10</label>
                                                        </li>
                                                        <li>
                                                            <input id="am2" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox" value="Reservations">
                                                            <label for="am2"
                                                                class="checkbox-custom-label">Reservations</label>
                                                        </li>
                                                        <li>
                                                            <input id="am3" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox"
                                                                value="Vegetarian Options">
                                                            <label for="am3" class="checkbox-custom-label">Vegetarian
                                                                Options</label>
                                                        </li>
                                                        <li>
                                                            <input id="am4" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox"
                                                                value="Moderate Noise">
                                                            <label for="am4" class="checkbox-custom-label">Moderate
                                                                Noise</label>
                                                        </li>
                                                        <li>
                                                            <input id="am5" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox" value="Good For Kids">
                                                            <label for="am5" class="checkbox-custom-label">Good For
                                                                Kids</label>
                                                        </li>
                                                        <li>
                                                            <input id="am6" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox"
                                                                value="Private Lot Parking">
                                                            <label for="am6" class="checkbox-custom-label">Private
                                                                Lot Parking</label>
                                                        </li>
                                                        <li>
                                                            <input id="am7" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox" value="Beer & Wine">
                                                            <label for="am7" class="checkbox-custom-label">Beer &
                                                                Wine</label>
                                                        </li>
                                                        <li>
                                                            <input id="am8" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox" value="TV Services">
                                                            <label for="am8" class="checkbox-custom-label">TV
                                                                Services</label>
                                                        </li>
                                                        <li>
                                                            <input id="am9" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox" value="Pets Allow">
                                                            <label for="am9" class="checkbox-custom-label">Pets
                                                                Allow</label>
                                                        </li>
                                                        <li>
                                                            <input id="am10" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox"
                                                                value="Offers Delivery">
                                                            <label for="am10" class="checkbox-custom-label">Offers
                                                                Delivery</label>
                                                        </li>
                                                        <li>
                                                            <input id="am11" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox"
                                                                value="Staff wears masks">
                                                            <label for="am11" class="checkbox-custom-label">Staff
                                                                wears masks</label>
                                                        </li>
                                                        <li>
                                                            <input id="am12" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox"
                                                                value="Accepts Credit Cards">
                                                            <label for="am12" class="checkbox-custom-label">Accepts
                                                                Credit Cards</label>
                                                        </li>
                                                        <li>
                                                            <input id="am13" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox"
                                                                value="Offers Catering">
                                                            <label for="am13" class="checkbox-custom-label">Offers
                                                                Catering</label>
                                                        </li>
                                                        <li>
                                                            <input id="am14" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox"
                                                                value="Good for Breakfast">
                                                            <label for="am14" class="checkbox-custom-label">Good for
                                                                Breakfast</label>
                                                        </li>
                                                        <li>
                                                            <input id="am15" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox"
                                                                value="Waiter Service">
                                                            <label for="am15" class="checkbox-custom-label">Waiter
                                                                Service</label>
                                                        </li>
                                                        <li>
                                                            <input id="am16" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox" value="Drive-Thru">
                                                            <label for="am16"
                                                                class="checkbox-custom-label">Drive-Thru</label>
                                                        </li>
                                                        <li>
                                                            <input id="am17" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox"
                                                                value="Outdoor Seating">
                                                            <label for="am17" class="checkbox-custom-label">Outdoor
                                                                Seating</label>
                                                        </li>
                                                        <li>
                                                            <input id="am18" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox"
                                                                value="Offers Takeout">
                                                            <label for="am18" class="checkbox-custom-label">Offers
                                                                Takeout</label>
                                                        </li>
                                                        <li>
                                                            <input id="am19" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox" value="Vegan Options">
                                                            <label for="am19" class="checkbox-custom-label">Vegan
                                                                Options</label>
                                                        </li>
                                                        <li>
                                                            <input id="am20" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox" value="Casual">
                                                            <label for="am20"
                                                                class="checkbox-custom-label">Casual</label>
                                                        </li>
                                                        <li>
                                                            <input id="am21" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox"
                                                                value="Good for Groups">
                                                            <label for="am21" class="checkbox-custom-label">Good for
                                                                Groups</label>
                                                        </li>
                                                        <li>
                                                            <input id="am22" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox"
                                                                value="Brunch, Lunch, Dinner">
                                                            <label for="am22" class="checkbox-custom-label">Brunch,
                                                                Lunch, Dinner</label>
                                                        </li>
                                                        <li>
                                                            <input id="am23" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox" value="Free Wi-Fi">
                                                            <label for="am23" class="checkbox-custom-label">Free
                                                                Wi-Fi</label>
                                                        </li>
                                                        <li>
                                                            <input id="am24" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox"
                                                                value="Wheelchair Accessible">
                                                            <label for="am24" class="checkbox-custom-label">Wheelchair
                                                                Accessible</label>
                                                        </li>
                                                        <li>
                                                            <input id="am25" class="checkbox-custom"
                                                                name="amenities[]" type="checkbox" value="Happy Hour">
                                                            <label for="am25" class="checkbox-custom-label">Happy
                                                                Hour</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Image & Gallery Option -->
                                <div class="dashboard-list-wraps bg-white rounded mb-4">
                                    <div class="dashboard-list-wraps-head br-bottom py-3 px-3">
                                        <div class="dashboard-list-wraps-flx">
                                            <h4 class="mb-0 ft-medium fs-md">
                                                <i class="fa fa-camera me-2 theme-cl fs-sm"></i>Image & Gallery Option
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="dashboard-list-wraps-body py-3 px-3">
                                        <div id="image-container">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <input type="file" class="form-control rounded file"
                                                        name="image[]" onchange="showImageOnFile(this)">
                                                </div>
                                                <div class="col-lg-6 col-md-6 uploadForm"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <button type="button" class="btn theme-cl rounded theme-bg-light ft-medium"
                                                id="add-image-div">Add New</button>
                                        </div>
                                    </div>
                                </div>


                                <!-- Menu Items -->
                                <div class="container mt-5">
                                    <div class="dashboard-list-wraps bg-white rounded mb-4">
                                        <div class="dashboard-list-wraps-head br-bottom py-3 px-3">
                                            <div class="dashboard-list-wraps-flx">
                                                <h4 class="mb-0 ft-medium fs-md"><i
                                                        class="fas fa-utensils me-2 theme-cl fs-sm"></i>
                                                    Menu Items
                                                </h4>
                                            </div>
                                        </div>

                                        <div class="dashboard-list-wraps-body py-3 px-3">
                                            <div id="menu-container">
                                                <div class="row mb-2">
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="mb-1">Item Name</label>
                                                            <input type="text" class="form-control rounded"
                                                                placeholder="" name="menu_item_name[]" />
                                                            @error('menu_item_name')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="mb-1">Category</label>
                                                            <input type="text" class="form-control rounded"
                                                                placeholder="" name="menu_item_category[]" />
                                                            @error('menu_item_category')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="mb-1">Price</label>
                                                            <input type="text" class="form-control rounded"
                                                                placeholder="ex. 49 USD" name="menu_item_price[]" />
                                                            @error('menu_item_price')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="mb-1">About Item</label>
                                                            <textarea class="form-control rounded ht-80" placeholder="Describe your Item"name="menu_item_about[]"
                                                                value="{{ old('') }}"></textarea>
                                                            @error('menu_item_about')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="formFileLg" class="form-label">Upload Item
                                                                Image</label>
                                                            <input class="form-control rounded"
                                                                type="file"name="menu_item_image[]">
                                                            @error('menu_item_image')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <button type="button"
                                                        class="btn theme-cl rounded theme-bg-light ft-medium"
                                                        id="add-div">Add New</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Working hours -->
                                <div class="dashboard-list-wraps bg-white rounded mb-4">
                                    <div class="dashboard-list-wraps-head br-bottom py-3 px-3">
                                        <div class="dashboard-list-wraps-flx">
                                            <h4 class="mb-0 ft-medium fs-md"><i
                                                    class="fa fa-clock me-2 theme-cl fs-sm"></i>Working Hours</h4>
                                        </div>
                                    </div>

                                    <div class="dashboard-list-wraps-body py-3 px-3">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="row align-items-center">
                                                    <label class="control-label col-lg-2 col-md-2">Monday</label>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="monday_opening_time" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="12:00 AM">12:00 AM</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="monday_closing_time" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="12:00 AM">12:00 AM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row align-items-center">
                                                    <label class="control-label col-lg-2 col-md-2">Tuesday</label>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="tuesday_opening_time" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="12:00 AM">12:00 AM</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="tuesday_closing_time" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="12:00 AM">12:00 AM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row align-items-center">
                                                    <label class="control-label col-lg-2 col-md-2">Wednesday</label>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="wednesday_opening_time" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="12:00 AM">12:00 AM</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="wednesday_closing_time" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="12:00 AM">12:00 AM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row align-items-center">
                                                    <label class="control-label col-lg-2 col-md-2">Thursday</label>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="thursday_opening_time" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="12:00 AM">12:00 AM</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="thursday_closing_time" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="12:00 AM">12:00 AM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row align-items-center">
                                                    <label class="control-label col-lg-2 col-md-2">Friday</label>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="friday_opening_time" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="12:00 AM">12:00 AM</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="friday_closing_time" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="12:00 AM">12:00 AM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row align-items-center">
                                                    <label class="control-label col-lg-2 col-md-2">Saturday</label>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="saturday_opening_time" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="12:00 AM">12:00 AM</option>
                                                            <option value="Closed">Closed</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="saturday_closing_time" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="12:00 AM">12:00 AM</option>
                                                            <option value="Closed">Closed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row align-items-center">
                                                    <label class="control-label col-lg-2 col-md-2">Sunday</label>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="sunday_opening_time" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="12:00 AM">12:00 AM</option>
                                                            <option value="Closed">Closed</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="sunday_closing_time" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="12:00 AM">12:00 AM</option>
                                                            <option value="Closed">Closed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mt-4">
                                                <input id="t24" class="checkbox-custom" name="opening_all_time"
                                                    type="checkbox">
                                                <label for="This Business open 7x24" class="checkbox-custom-label">This
                                                    Business open 7x24</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Social Links -->
                                <div class="dashboard-list-wraps bg-white rounded mb-4">
                                    <div class="dashboard-list-wraps-head br-bottom py-3 px-3">
                                        <div class="dashboard-list-wraps-flx">
                                            <h4 class="mb-0 ft-medium fs-md"><i
                                                    class="fa fa-user-friends me-2 theme-cl fs-sm"></i>Social Links</h4>
                                        </div>
                                    </div>

                                    <div class="dashboard-list-wraps-body py-3 px-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1"><i
                                                            class="ti-facebook theme-cl me-1"></i>Facebook</label>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="facebook" value="{{ old('facebook') }}" />
                                                    <div class="validation-error">
                                                        @error('facebook')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1"><i
                                                            class="ti-twitter theme-cl me-1"></i>Twitter</label>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="twitter" value="{{ old('twitter') }}" />
                                                    <div class="validation-error">
                                                        @error('twitter')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1"><i
                                                            class="ti-instagram theme-cl me-1"></i>Instagram</label>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="instagram" value="{{ old('instagram') }}" />
                                                    <div class="validation-error">
                                                        @error('instagram')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1"><i
                                                            class="ti-linkedin theme-cl me-1"></i>Linkedin</label>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="linkedin" value="{{ old('linkedin') }}" />
                                                    <div class="validation-error">
                                                        @error('linkedin')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <button class="btn theme-bg rounded text-light" type="submit">Submit
                                                        & Preview</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Div for Menu --}}
            <div class="row menu-row d-none mb-2" style="border:2px solid black">
                <h2> Add Another Menu Items</h2>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="mb-1">Item Name</label>
                        <input type="text" class="form-control rounded" placeholder="Spicy Brunchi Burger"
                            name="menu_item_name[]" value="{{ old('') }}" required />
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="mb-1">Category</label>
                        <input type="text" class="form-control rounded" placeholder="Fast Food"
                            name="menu_item_category[]" value="{{ old('') }}" required />
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="mb-1">Price</label>
                        <input type="text" class="form-control rounded" placeholder="ex. 49 USD"
                            name="menu_item_price[]" value="{{ old('') }}" required />
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="mb-1">About Item</label>
                        <textarea class="form-control rounded ht-80" placeholder="Describe your Item"name="menu_item_about[]"
                            value="{{ old('') }}"></textarea>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="formFileLg" class="form-label">Upload Item
                            Image</label>
                        <input class="form-control rounded" type="file"name="menu_item_image[]" required>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        {{-- <button type="button" class="btn theme-cl rounded theme-bg-light ft-medium">Remove</button> --}}
                        <button type="button" class="btn btn-danger"
                            onclick="removeMenuRow(this, event)">Remove</button>
                    </div>
                </div>
            </div>
            {{-- Div for Menu --}}

            {{-- Div for Image --}}
            <div class="row image-row d-none mt-2">
                <div class="col-lg-6 col-md-6">
                    <input type="file" class="form-control rounded file" name="image[]"
                        onchange="showImageOnFile(this)">
                </div>
                <div class="col-lg-6 col-md-6 uploadForm"></div>

                <div class="col-lg-6 col-md-6">
                    <div class="input-group-append">
                        <button type="button" onclick="removeImageRow(this, event)"
                            class="btn btn-danger removeRow">Remove</button>
                    </div>
                </div>
            </div>
            {{-- Div for Image --}}
        @stop


        @section('custom_js')

            <script>
                var input = document.querySelector('#keywords');
                new Tagify(input);
            </script>

            <script>
                $(document).ready(function() {
                    $('#add-div').click(function() {
                        var newDiv = $('.menu-row').clone();
                        $(newDiv).removeClass('d-none').removeClass('menu-row');
                        $('#menu-container').append(newDiv);
                    });
                });
            </script>

            <script>
                function removeImageRow(elm, e) {
                    e.preventDefault();
                    $(elm).parent().parent().parent().remove();
                }

                function removeMenuRow(elm, e) {
                    e.preventDefault();
                    $(elm).parent().parent().parent().remove();
                }
            </script>

            <script>
                $(document).ready(function() {
                    $('#add-image-div').click(function() {
                        var newImageDiv = $('.image-row').clone();
                        $(newImageDiv).removeClass('d-none').removeClass('image-row');
                        $('#image-container').append(newImageDiv);
                    });
                });
            </script>

            <script>
                function filePreview(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $(input).parent().next().find('img').remove();
                            $(input).parent().next().append('<img src="' + e.target.result + '" width="100" height="100"/>');
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                function showImageOnFile(elm) {
                    filePreview(elm);
                }
            </script>

        @endsection
