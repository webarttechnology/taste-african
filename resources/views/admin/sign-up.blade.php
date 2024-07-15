<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 10:30:50 GMT -->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="African Food - Admin Dashboard">

  <title>Africa Food USA - Admin Dashboard</title>

<!-- GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet"> 
<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

<!-- Ekka CSS -->
<link id="ekka-css" href="{{asset('admin/css/ekka.css')}}" rel="stylesheet"/>

<!-- FAVICON -->
 <link href="{{asset('admin/img/favicon.png')}}" rel="shortcut icon" />

{{-- Toaster:: --}}
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- FAVICON -->
  
</head>

<body class="sign-inup" id="body">
  <div class="container d-flex align-items-center justify-content-center form-height pt-24px pb-24px">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-10">
        <div class="card">
          <div class="card-header bg-primary">
            <div class="ec-brand">
              <center><img class="ec-brand-icon" src="{{ asset('front/img/logos.png') }}" width="100px"/></center>
            </div>
          </div>
          <div class="card-body p-5">
            <h4 class="text-dark mb-5">Admin Sign Up</h4>

            <form action="{{ route ('admin.register')}}" method="POST">
              @csrf
              <div class="row">
                <div class="form-group col-md-12 mb-4">
                  <label class="mb-1">Name</label><span class="optional-label" style="color: red">*</span>
                  <input type="text" class="form-control rounded" name="name" required value="{{ old ('name')}}">
                </div>

                <div class="form-group col-md-12">
                  <label class="mb-1">Email</label><span class="optional-label" style="color: red">*</span>
                  <input type="text" class="form-control rounded" name="email" required value="{{ old ('email')}}">
                </div>

                

                <div class="form-group col-md-12 ">
                  <label class="mb-1">Password</label><span class="optional-label" style="color: red">*</span>
                  <input type="password" class="form-control rounded" name="password" required ><span class="optional-label">(Required, at least 8 characters)</span>
                  <span class="tooltip">i
                    <span class="tooltiptext">Password should be at least 8 characters long and contain a mix of letters and numbers.</span>
                </span>
                </div>

                <div class="form-group col-md-12 ">
                  <label class="mb-1">Confirm Password</label><span class="optional-label" style="color: red">*</span>
                  <input type="password" class="form-control rounded" id="cpassword" name="password_confirmation"  required>
                </div>

                <div class="col-md-12">  
                  <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>
                  <p class="sign-upp">Already have an account?
                    <a class="text-blue" href="{{ route ('admin.loginPage')}}">Sign in</a>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

 <!-- Common Javascript -->
<script src="{{asset('admin/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/plugins/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
<script src="{{asset('admin/plugins/slick/slick.min.js')}}"></script>

<!-- Ekka Custom -->
<script src="{{asset('admin/js/ekka.js')}}"></script>

{{-- Toaster:: --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
		toastr.options = {
		"closeButton": true,
		"progressBar": true
	}

	@if(Session::has('message'))
		toastr.success("{{ session('message') }}");
	@endif

	@if(Session::has('error'))
		toastr.error("{{ session('error') }}");
	@endif

	@if(Session::has('info'))
		toastr.info("{{ session('info') }}");
	@endif

	@if(Session::has('warning'))
		toastr.warning("{{ session('warning') }}");
	@endif

	@if ($errors->any())
		@foreach ($errors->all() as $error)
			toastr.error("{{ $error }}");
		@endforeach
	@endif
</script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 10:30:50 GMT -->
</html>