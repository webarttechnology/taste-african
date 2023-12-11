@php
    $contact = App\Models\ContactDetails::get();
    $category = App\Models\Category::get();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taste of Africa</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/img/favicon.png') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>



    <!-- Custom CSS -->
    <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet">


    {{-- Dropzone --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

    {{-- Toaster:: --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>

    <div id="main-wrapper">
        <div class="header header-transparent change-logo  navbar-light bg-light">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand static-logo" href="{{ route('front') }}">
                        <img src="{{ asset($contact[0]->logo) }} " class="logo" alt="" width="100px" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('front') }}">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('front.about') }}">About</a>
                            </li>
                            @if (Auth::check() && Auth::user()->role == 'user')
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('user.dashboard') }}">
                                        Listings</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('front.faq') }}"> FAQ</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('front.contact') }}">Contact</a>
                            </li>

                            {{-- @if (Auth::check() && Auth::user()->role == 'user')
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Listings
                                    </a>

                                </li>
                            @endif
                            @if (Auth::check() && Auth::user()->role == 'business_owner')
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        User Dashboard
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('business.dashboard') }}"><i
                                                    class="lni lni-files me-2"></i>My
                                                Listings</a></li>
                                        <li><a class="dropdown-item" href="{{ route('business_listing_add') }}"><i
                                                    class="lni lni-add-files me-2"></i>Add Listing</a></li>
                                    </ul>
                                </li>
                            @endif --}}
                        </ul>

                        @auth

                            <a href="{{ route('user.logout') }}" class="ft-bold"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt me-1 theme-cl"></i>Logout
                            </a>
                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        @else
                            <ul class="nav-menu nav-menu-social align-to-right">
                                <li class="add-listing">
                                    <a class="auth-link" id="places-tab" href="{{ route('business.registerForm') }}"
                                        aria-selected="true"><i class="fas fa-plus me-2"></i>For Business </a>
                                </li>
                                <li class="add-listing">
                                    <a class="auth-link" id="places-tab" href="{{ route('user.registerPage') }}"
                                        aria-selected="true"><i class="fas fa-plus me-2"></i>Register</a>
                                </li>
                                <li>
                                    <a class="ft-bold"href="{{ route('login') }}"><i
                                            class="fas fa-sign-in-alt me-1 theme-cl"></i>Login</a>
                                </li>
                            </ul>
                        @endauth
                    </div>
            </div>
            </nav>
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- Top header  -->




        @yield('content')



        <!-- ============================ Footer Start ================================== -->

        



        <!-- Footer -->
        <footer class="text-center text-lg-start bg-body-tertiary text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="{{ $contact[0]->facebook }}" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{ $contact[0]->twitter }}" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="{{ $contact[0]->youtube }}" class="me-4 text-reset">
                        <i class="lni lni-youtube"></i>
                    </a>
                    <a href="{{ $contact[0]->instragram }}" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="{{ $contact[0]->linkdin }}" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                   
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
          
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                 <img src="{{ asset($contact[0]->logo) }}" class="img-footer small mb-2" />
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit. Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-5 col-xl-2 mx-auto mb-4 footer-div">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Listings Category
                            </h6>
                            @foreach ($category as $listing_cat )
                            <p class="footer-menu">
                                <a href="{{url('category/listings/'.$listing_cat->id)}}" class="text-reset"><i class="fas fa-gem me-3"></i>{{$listing_cat->name}}</a>
                            </p>
                            @endforeach   
                            
                            
                           
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 footer-div">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                 Useful links
                            </h6>
                            <p class="footer-menu">
                                <a href="{{ route('front') }}" class="text-reset"><i class="fas fa-gem me-3"></i>Home</a>
                            </p>
                            <p class="footer-menu">
                                <a href="{{ route('front.about') }}" class="text-reset"><i class="fas fa-gem me-3"></i>About</a>
                            </p>
                            <p class="footer-menu">
                                <a href="{{ route('front.contact') }}" class="text-reset"><i class="fas fa-gem me-3"></i>Contact</a>
                            </p>

                            <p class="footer-menu">
                                <a href="{{route('business.registerForm')}}" class="text-reset"><i class="fas fa-gem me-3"></i>Business Register</a>
                            </p>

                            <p class="footer-menu">
                                <a href="{{route('user.registerPage')}}" class="text-reset"><i class="fas fa-gem me-3"></i>User Register</a>
                            </p>

                            <p class="footer-menu">
                                <a href="{{route('login')}}" class="text-reset"><i class="fas fa-gem me-3"></i>Login</a>
                            </p>
                          
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4"><i class="fas fa-gem me-3"></i>Contact</h6>
                            <p><i class="fas fa-home me-3"></i> {{ $contact[0]->address }}</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                {{ $contact[0]->email }}
                            </p>
                            <p><i class="fas fa-phone me-3"></i> {{ $contact[0]->phone }}</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
           
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: #000;">
                © 2023 Copyright:
                <a class="text-reset fw-bold" href="https://webart.technology/">WebArt Technology</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->





        <!-- ============================ Footer End ================================== -->

        <a id="tops-button" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('front/js/popper.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/slick.js') }}"></script>
    <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/js/counterup.js') }}"></script>
    <script src="{{ asset('front/js/lightbox.js') }}"></script>
    <script src="{{ asset('front/js/moment.min.js') }}"></script>
    <script src="{{ asset('front/js/lightbox.js') }}"></script>
    <script src="{{ asset('front/js/jQuery.style.switcher.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>

    {{-- Tagify:: --}}
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

    {{-- Toaster:: --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    {{-- Sweet Alert:: --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }

        @if (Session::has('message'))
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    <!-- Multi-select -->
    @yield('custom_js')
    <!-- Multi-select -->
</body>

</html>
