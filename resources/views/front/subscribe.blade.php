 <!-- ======================= Newsletter Start ============================ -->
 <section class="space bg-cover" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;">
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <h6 class="text-light mb-0">Subscribe Now</h6>
                    <h2 class="ft-bold text-light">Get All Updates & Advance Offers</h2>
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
                <form class="bg-white rounded p-1" action="{{route ('subscribe_store')}}" method="POST">
                    @csrf
                    <div class="row no-gutters">
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                            <div class="form-group mb-0 position-relative">
                                <input type="email" class="form-control b-0"
                                    placeholder="Enter Your Email Address" name="email" required>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                            <div class="form-group mb-0 position-relative">
                                <button class="btn full-width btn-height theme-bg text-light fs-md"
                                    type="submit">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
<!-- ======================= Newsletter Start ============================ -->