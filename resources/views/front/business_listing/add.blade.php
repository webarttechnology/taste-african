@extends('front.layout.app')
@section('content')

    <!-- =============================== Dashboard Header ========================== -->
    <section class="bg-cover position-relative" style="background:url({{ asset('front/img/cover.jpg') }}) no-repeat #C90000;">
        <div class="abs-list-sec"><a href="{{ route('business_listing') }}" class="add-list-btn"><i
                    class="fas fa-plus me-2"></i>All Listing</a></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class="dashboard-head-author-clicl">
                        <div class="dashboard-head-author-thumb">
                            @if (Auth::user()->image === null)
                                <img src="{{ asset('front/img/user.png') }}" class="img-fluid" alt="" />
                            @else
                                <img src="{{ asset(Auth::user()->image) }}" class="img-fluid" alt="" />
                            @endif
                        </div>
                        <div class="dashboard-head-author-caption">
                            <div class="dashploio">
                                <h4>{{ Auth::user()->name }}</h4>
                            </div>
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

        <div class="goodup-dashboard-content detailed">
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
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Listing Title</label>
                                                    <span class="asterisk_required_field"></span>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="title" required value="{{ old('title') }}">
                                                    <div class="validation-error">
                                                        @error('title')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Categories</label><span
                                                        class="asterisk_required_field"></span>
                                                    <select class="form-control"name="category"
                                                        value="{{ old('category') }}" required>
                                                        <option value="">---- Select ----</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="validation-error">
                                                        @error('category')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Country of Origin</label>
                                                    <select class="form-control" name="country" id="countrySelect"
                                                        required>
                                                        <option value="">---- Select ----</option>
                                                        @foreach ($country as $countries)
                                                            <option value="{{ $countries->country_name }}">
                                                                {{ $countries->country_name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="validation-error">
                                                        @error('country')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Listing Status</label> <span
                                                        class="asterisk_required_field"></span>
                                                    <select class="form-control"name="approval" required>
                                                        <option value="">---- Select ----</option>
                                                        <option value="hide">hide</option>
                                                        <option value="show">show</option>
                                                    </select>
                                                </div>
                                            </div>

                                            {{-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Keywords</label> <span class="asterisk_required_field"></span>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        id="keywords" name="keywords" value="{{ old('') }}" required/>
                                                    <div class="validation-error">
                                                        @error('keywords')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">About Listing</label><span
                                                        class="asterisk_required_field"></span>
                                                    <textarea class="form-control rounded ht-150" placeholder="" name="description" value="{{ old('description') }}"
                                                        required>{{old('description')}}</textarea>
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
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Address</label><span
                                                        class="asterisk_required_field"></span>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="address" value="{{ old('address') }}" required />
                                                    <div class="validation-error">
                                                        @error('address')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">State</label><span
                                                        class="asterisk_required_field"></span>
                                                    <select id="state" name="state" class="form-control rounded" required>
                                                        <option value="" selected disabled>Select a State</option>
                                                        @foreach ($states as $state)
                                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    {{-- <input type="text" class="form-control rounded" name="state"
                                                        value="{{ old('state') }}" required /> --}}
                                                    <div class="validation-error">
                                                        @error('state')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">City</label><span
                                                        class="asterisk_required_field"></span>
                                                    <select id="city" name="city" class="form-control rounded" required>
                                                        <option value="" selected disabled>Select a City</option>
                                                    </select>
                                                    {{-- <input type="text" class="form-control rounded" name="city"
                                                        value="{{ old('city') }}" required /> --}}
                                                    <div class="validation-error">
                                                        @error('city')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Zip Code</label><span
                                                        class="asterisk_required_field"></span>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="zip_code" value="{{ old('zip_code') }}" required />
                                                    <div class="validation-error">
                                                        @error('zip_code')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            

                                            <!--<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">-->
                                            <!--    <div class="form-group">-->
                                            <!--        <button type="button"-->
                                            <!--            class="btn theme-cl rounded bg-warning ft-medium mt-4"-->
                                            <!--            id="addNewCountryButton">-->
                                            <!--            Add New Country-->
                                            <!--        </button>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            
                                            
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Mobile</label><span
                                                        class="asterisk_required_field"></span>
                                                    <input type="number" class="form-control rounded" placeholder=""
                                                        name="mobile" value="{{ old('mobile') }}" required />
                                                    <div class="validation-error">
                                                        @error('mobile')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-1">Email</label><span
                                                        class="asterisk_required_field"></span>
                                                    <input type="text" class="form-control rounded" placeholder=""
                                                        name="email" value="{{ old('email') }}" required />
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
                                                    <input type="text" class="form-control rounded" placeholder="https://example.com"
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
                                                    class="lni lni-coffee-cup me-2 theme-cl fs-sm"></i>Amenties
                                                Options<span class="asterisk_required_field"></span>
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="dashboard-list-wraps-body py-3 px-3">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="Goodup-all-features-list">
                                                    <ul id="amenities-list">
                                                        @foreach ($amenities as $amenity)
                                                            <li>
                                                                <input class="checkbox-custom"
                                                                    id="amenities{{ $amenity->id }}" name="amenities[]"
                                                                    type="checkbox" value="{{ $amenity->name }}">
                                                                <label for="amenities{{ $amenity->id }}"
                                                                    class="checkbox-custom-label">{{ $amenity->name }}</label>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <button type="button"
                                                        class="btn theme-cl rounded bg-warning ft-medium  mt-4"
                                                        id="addNewButton"> You can add New Amenties
                                                    </button>
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
                                                <i class="fa fa-camera me-2 theme-cl fs-sm"></i>Image & Gallery Option<span
                                                    class="asterisk_required_field"></span>
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="dashboard-list-wraps-body py-3 px-3">
                                        <div id="image-container">
                                            <div class="row mb-2">
                                                <div class="col-lg-6 col-md-6">
                                                    <input type="file" class="form-control rounded file" required
                                                        name="image[]" onchange="showImageOnFile(this)">
                                                </div>
                                                <div class="col-lg-6 col-md-6 uploadForm"></div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-lg-6 col-md-6">
                                                    <input type="file" class="form-control rounded file" required
                                                        name="image[]" onchange="showImageOnFile(this)">
                                                </div>
                                                <div class="col-lg-6 col-md-6 uploadForm"></div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-lg-6 col-md-6">
                                                    <input type="file" class="form-control rounded file" required
                                                        name="image[]" onchange="showImageOnFile(this)">
                                                </div>
                                                <div class="col-lg-6 col-md-6 uploadForm"></div>
                                            </div>

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <button type="button"
                                                    class="btn theme-cl rounded bg-warning ft-medium mt-4"
                                                    id="add-image-div">Add New</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Menu Items -->
                                {{-- <div class="container mt-5">
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
                                                        class="btn theme-cl rounded bg-warning ft-medium"
                                                        id="add-div">Add New</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}


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
                                                            <option value="Closed">Closed</option>
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
                                                            <option value="Closed">Closed</option>
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
                                                            <option value="Closed">Closed</option>
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
                                                            <option value="Closed">Closed</option>
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
                                                            <option value="Closed">Closed</option>
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
                                                            <option value="Closed">Closed</option>
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
                                                            <option value="Closed">Closed</option>
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
                                                            <option value="Closed">Closed</option>
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
                                                            <option value="Closed">Closed</option>
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
                                                            <option value="Closed">Closed</option>
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
                                                            <option value="Closed">Closed</option>
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
                                                            <option value="Closed">Closed</option>
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
                                                            <option value="Closed">Closed</option>
                                                            <option value="Closed">Closed</option>
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
                                                            <option value="Closed">Closed</option>
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
                                                    <button class="btn theme-bg rounded text-light" type="submit"> Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                {{-- Div for Menu --}}
                                {{-- <div class="row menu-row d-none mb-2">
                                    <div class="dashboard-list-wraps-head br-bottom py-3 px-3">
                                        <div class="dashboard-list-wraps-flx">
                                            <h4 class="mb-0 ft-medium fs-md"><i
                                                    class="fas fa-utensils me-2 theme-cl fs-sm"></i>
                                                Add New Menu Items
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="mb-1">Item Name</label>
                                            <input type="text" class="form-control rounded"
                                                placeholder="Spicy Brunchi Burger" name="menu_item_name[]"
                                                value="{{ old('') }}" required />
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
                                            <input class="form-control rounded" type="file"name="menu_item_image[]">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <button type="button" class="btn theme-cl rounded theme-bg-light ft-medium">Remove</button>
                                            <button type="button" class="btn theme-cl rounded bg-info ft-medium"
                                                style="width:100%" onclick="removeMenuRow(this, event)">Remove</button>

                                        </div>
                                    </div>
                                </div> --}}
                                {{-- Div for Menu --}}


                                {{-- Div for Image --}}
                                <div class="row image-row d-none mt-2">
                                    <div class="col-lg-4 col-md-6">
                                        <input type="file" class="form-control rounded file" name="image[]"
                                            onchange="showImageOnFile(this)">
                                    </div>
                                    <div class="col-lg-4 col-md-6 uploadForm"></div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-group-append">
                                            <button type="button" onclick="removeImageRow(this, event)"
                                                class="btn btn-danger removeRow">Remove</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- Div for Image --}}





                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
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

    <script>
        $(document).ready(function() {
            // Function to add new amenity
            var amenitiesId = 1;
            $('#addNewButton').on('click', function() {
                Swal.fire({
                    title: "Add new amenity",
                    input: "text",
                    inputAttributes: {
                        autocapitalize: "off"
                    },
                    showCancelButton: true,
                    confirmButtonText: "Add",
                    showLoaderOnConfirm: true,
                    allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                    if (result.isConfirmed) {
                        var newListItem = '<li class="am1" >' +
                            '<input id="amenities_' + amenitiesId +
                            '" class="checkbox-custom" name="amenities[]" type="checkbox" value="' +
                            result.value + '">' +
                            '<label for="amenities_' + amenitiesId +
                            '" class="checkbox-custom-label">' + result.value + '</label>' +
                            '</li>';

                        $('#amenities-list').append(newListItem);
                        amenitiesId++;
                    }
                });
            });

            // Function to add new country
            $('#addNewCountryButton').on('click', function() {
                var newCountryName = prompt("Enter the name of the new country:");

                if (newCountryName) {
                    $.ajax({
                        url: '{{ route('addCountry') }}', // Laravel route for adding a country
                        method: 'POST',
                        data: {
                            country: newCountryName,
                            _token: '{{ csrf_token() }}' // CSRF token
                        },
                        success: function(response) {
                            $('#countrySelect').append(`<option value="${response.country.id}">${response.country.country_name}</option>`);
                            $('#countrySelect').val(response.country.id); // Optionally select the newly added option
                            alert("Country added successfully.");
                        },
                        error: function(xhr, status, error) {
                            alert("Failed to add country.");
                        }
                    });
                }
            });
        });
        // Initialize Select2 for state dropdown
        $('#state').select2({
            placeholder: "Select a State",
            allowClear: true // Option to clear selected state
        });

        // Initialize Select2 for city dropdown
        $('#city').select2({
            placeholder: "Select a City",
            allowClear: true // Option to clear selected city
        });

        $('#state').change(function() {
            var stateId = $(this).val();
            if (stateId) {
                $.ajax({
                    url: '/get-all-cities/' + stateId, // Replace with your Laravel route for fetching cities
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#city').empty();
                        $('#city').append('<option value="" selected disabled>Select a City</option>');
                        $.each(data, function(key, value) {
                            $('#city').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching cities: ' + error);
                    }
                });
            } else {
                $('#city').empty();
                $('#city').append('<option value="" selected disabled>Select a City</option>');
            }
        });
    </script>

@endsection
