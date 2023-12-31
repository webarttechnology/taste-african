
<div class="goodup-dashboard-wrap gray px-4 py-5">
    <a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false"
        aria-controls="MobNav"> <i class="fas fa-bars me-2"></i>Dashboard Navigation
    </a>
    <div class="collapse" id="MobNav">
        <div class="goodup-dashboard-nav sticky-top">
            <div class="goodup-dashboard-inner">
                <ul data-submenu-title="Main Navigation">
                    @if (Auth::user()->role == 'business_owner')
                    <li class="{{ Route::is('business.dashboard') ? 'active' : ''}}"><a href="{{route ('business.dashboard')}}"><i class="lni lni-dashboard me-2"></i>Dashboard</a></li>
                    <li class="{{ Route::is('business_listing_add') ? 'active' : ''}}"><a href="{{route ('business_listing_add')}}"><i class="lni lni-add-files me-2"></i>Add Listing</a></li>
                    @endif                 
                    <li class="{{ Route::is('user.dashboard') ? 'active' : ''}}">
                        @if (Auth::user()->role == 'business_owner')
                        <li class="{{ Route::is('business_listing') ? 'active' : ''}}">
                        <a href="{{route ('business_listing')}}"><i class="lni lni-files me-2"></i>My Listings </a>
                        </li>           
                        @else
                        <li class="{{ Route::is('user.dashboard') ? 'active' : ''}}">
                        <a href="{{route ('user.dashboard')}}"><i class="lni lni-files me-2"></i>My Listings </a>
                        @endif 
                    </li>                 
                   
                </ul>
                <ul data-submenu-title="My Accounts">
                    <li class="{{ Route::is('user.profile') ? 'active' : ''}}"><a href="{{route ('user.profile')}}"><i class="lni lni-user me-2"></i>My Profile </a></li>
                    <li class="{{ Route::is('user.changepassword') ? 'active' : ''}}"><a href="{{route ('user.changepassword')}}"><i class="lni lni-lock-alt me-2"></i>Change Password</a></li>
                    </ul>
            </div>
        </div>
    </div>
    