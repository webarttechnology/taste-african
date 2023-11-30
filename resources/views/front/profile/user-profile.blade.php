@extends('front.layout.app')
@section('content')

    <!-- ======================= dashboard Detail ======================== -->
    <div class="goodup-dashboard-wrap gray px-4 py-5">
        <a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false"
            aria-controls="MobNav">
            <i class="fas fa-bars me-2"></i>Dashboard Navigation </a>

        @include('front.layout.sidebar')

        <div class="goodup-dashboard-content">
            <div class="dashboard-tlbar d-block mb-5">
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12">
                        <h1 class="ft-medium">Profile Info</h1>
                    </div>
                </div>
            </div>

            <div class="dashboard-widg-bar d-block">
                <div class="row">
                   
                    <div class="col-xl-12 col-lg-9 col-md-8 col-sm-12">
                        <form class="submit-form" method="POST" action="{{route ('user.updateOrCreate')}}">
							@csrf
                            <div class="dashboard-list-wraps bg-white rounded mb-4">
                                <div class="dashboard-list-wraps-head br-bottom py-3 px-3">
                                    <div class="dashboard-list-wraps-flx">
                                        <h4 class="mb-0 ft-medium fs-md">
											<i class="fa fa-user-check me-2 theme-cl fs-sm"></i>My Profile</h4>
                                    </div>
                                </div>

                                <div class="dashboard-list-wraps-body py-3 px-3">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-1">Name</label>
												<input type="text" class="form-control rounded" name="name"  value="{{$userWithInfo->name}}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-1">Email ID</label>
                                                <input type="text" class="form-control rounded" name="email"  value="{{$userWithInfo->email}}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-1">Mobile</label>
												<input type="text" class="form-control rounded" name="phone" value="{{$userWithInfo->phone}}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-1">State</label>
                                                <select class="form-control" name="state">
                                                    <option value="" {{ $userWithInfo->info == null ? 'selected' : '' }}>Select</option>
                                                    <option value="Uttar Pradesh" {{ optional($userWithInfo->info)->state == 'Uttar Pradesh' ? 'selected' : '' }}>Uttar Pradesh</option>
                                                    <option value="Uttrakhand" {{ optional($userWithInfo->info)->state == 'Uttrakhand' ? 'selected' : '' }}>Uttrakhand</option>
                                                    <option value="Gujrat" {{ optional($userWithInfo->info)->state == 'Gujrat' ? 'selected' : '' }}>Gujrat</option>
                                                    <option value="Mumbai" {{ optional($userWithInfo->info)->state == 'Mumbai' ? 'selected' : '' }}>Mumbai</option>
                                                    <option value="Karnataka" {{ optional($userWithInfo->info)->state == 'Karnataka' ? 'selected' : '' }}>Karnataka</option>
                                                    <option value="Goa" {{ optional($userWithInfo->info)->state == 'Goa' ? 'selected' : '' }}>Goa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-1">City</label>
                                                <select class="form-control" name="city">
                                                    <option>Select</option>
                                                    <option value="Aligarh" {{ optional($userWithInfo->info)->city == 'Aligarh' ? 'selected' : '' }}>Aligarh</option>                                                    <option value="Allahabad" {{ optional($userWithInfo->info)->city == 'Allahabad' ? 'selected' : '' }}>Allahabad</option>
                                                    <option value="Agra" {{ optional($userWithInfo->info)->city == 'Agra' ? 'selected' : '' }}>Agra</option>
                                                    <option value="Gonda" {{ optional($userWithInfo->info)->city == 'Gonda' ? 'selected' : '' }}>Gonda</option>
                                                    <option value="Lucknow" {{ optional($userWithInfo->info)->city == 'Lucknow' ? 'selected' : '' }}>Lucknow</option>
                                                    <option value="Meerut" {{ optional($userWithInfo->info)->city == 'Meerut' ? 'selected' : '' }}>Meerut</option>
                                                    <option value="Ghaziabad" {{ optional($userWithInfo->info)->city == 'Ghaziabad' ? 'selected' : '' }}>Ghaziabad</option>
                                                </select>                                                
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-1">Address</label>
                                                <input type="text" class="form-control rounded"  name="address" value="{{$userWithInfo->info == null ? '' : $userWithInfo->info->address}}"/>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-1">Zip Code</label>
                                                <input type="text" class="form-control rounded" name="zip_code" value="{{$userWithInfo->info == null ? '' : $userWithInfo->info->zip_code}}"/>
                                            </div>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>

							<button class="btn btn-info" type="submit">Submit</button>
                            
                        </form>
                    </div>
                </div>

            </div>

        @stop
