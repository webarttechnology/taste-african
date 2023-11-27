
<div class="goodup-dashboard-wrap gray px-4 py-5">
    <a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false"
        aria-controls="MobNav"> <i class="fas fa-bars me-2"></i>Dashboard Navigation
    </a>
    <div class="collapse" id="MobNav">
        <div class="goodup-dashboard-nav sticky-top">
            <div class="goodup-dashboard-inner">
                <ul data-submenu-title="Main Navigation">
                    <li><a href="{{route ('user.dashboard')}}"><i class="lni lni-dashboard me-2"></i>Dashboard</a></li>
                    <li class="active">
                        <a href="{{route ('business_listing')}}"><i class="lni lni-files me-2"></i>My Listings </a>
                    </li>
                    <li><a href="{{route ('business_listing_add')}}"><i class="lni lni-add-files me-2"></i>Add Listing</a></li>
                   
                </ul>
                {{-- <ul data-submenu-title="My Accounts">
                    <li><a href="dashboard-my-profile.html"><i class="lni lni-user me-2"></i>My Profile </a></li>
                    <li><a href="dashboard-change-password.html"><i class="lni lni-lock-alt me-2"></i>Change Password</a></li>
                    <li><a href="javascript:void(0);"><i class="lni lni-trash-can me-2"></i>Delete Account</a></li>
                    <li><a href="login.html"><i class="lni lni-power-switch me-2"></i>Log Out</a></li>
                </ul> --}}
            </div>
        </div>
    </div>
    