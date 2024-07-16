<div class="list_bottom">
<div class="row justify-content-center">
    <div class="col-xl-11 col-lg-12 col-md-12 col-12">
        <div class="Goodup-search-shadow margin-top">
            <h2 class="t-white" style:"font-weight: 400;">Search Vendors Here</h2>                           
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="placesseach" role="tabpanel"
                    aria-labelledby="placesseach-tab">
                    <form class="main-search-wrap fl-wrap" action="{{route('front.allListing')}}" method="GET" onsubmit="return validateForm()">
                        {{-- @csrf --}}
                        <div class="main-search-item">
                            <span class="search-tag"><i class="lni lni-briefcase"></i></span>
                            <select class="form-control" name="search_item" id="search_item">
                                <option value="">Select Category</option>
                                @foreach ($business_category as $category)
                                 <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="main-search-item">
                            <span class="search-tag"><i class="lni lni-keyboard"></i></span>
                            <select class="form-control radius" name="state" id="states">
                                <option value="" disabled selected>Select State</option>
                                @foreach ($states as $state_name)
                                    <option value="{{ $state_name->id }}">{{ $state_name->name }}</option>
                                @endforeach
                            </select>
                            <select class="form-control" name="city" id="cities">
                                <option value="" disabled selected>Select City</option>
                            </select>
                        </div>                                    
                       
                        <div class="main-search-button">
                            <button class="btn full-width theme-bg text-white" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>  
</div>