<style>

.rating {
  display: flex;
  width: 100%;
  justify-content: center;
  overflow: hidden;
  flex-direction: row-reverse;
  height: 150px;
  position: relative;
}

.rating-0 {
  filter: grayscale(100%);
}

.rating > input {
  display: none;
}

.rating > label {
  cursor: pointer;
  width: 40px;
  height: 40px;
  margin-top: auto;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23e3e3e3' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 76%;
  transition: .3s;
}

.rating > input:checked ~ label,
.rating > input:checked ~ label ~ label {
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
}


.rating > input:not(:checked) ~ label:hover,
.rating > input:not(:checked) ~ label:hover ~ label {
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23d8b11e' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
}

.emoji-wrapper {
  width: 100%;
  text-align: center;
  height: 100px;
  overflow: hidden;
  position: absolute;
  top: 0;
  left: 0;
}

.emoji-wrapper:before,
.emoji-wrapper:after{
  content: "";
  height: 15px;
  width: 100%;
  position: absolute;
  left: 0;
  z-index: 1;
}

.emoji-wrapper:before {
  top: 0;
  background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
}

.emoji-wrapper:after{
  bottom: 0;
  background: linear-gradient(to top, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
}

.emoji {
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: .3s;
}

.emoji > svg {
  margin: 15px 0; 
  width: 70px;
  height: 70px;
  flex-shrink: 0;
}

#rating-1:checked ~ .emoji-wrapper > .emoji { transform: translateY(-100px); }
#rating-2:checked ~ .emoji-wrapper > .emoji { transform: translateY(-200px); }
#rating-3:checked ~ .emoji-wrapper > .emoji { transform: translateY(-300px); }
#rating-4:checked ~ .emoji-wrapper > .emoji { transform: translateY(-400px); }
#rating-5:checked ~ .emoji-wrapper > .emoji { transform: translateY(-500px); }

.feedback {
  max-width: 360px;
  background-color: #fff;
  width: 100%;
  padding: 30px;
  border-radius: 8px;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  align-items: center;
  box-shadow: 0 4px 30px rgba(0,0,0,.05);
}
</style>

@extends('front.layout.app')
@section('content')

    <!-- ======================= Searchbar Banner ======================== -->
    {{-- @foreach ($data as $listing) --}}
    <div class="featured-slick">
        <div class="featured-gallery-slide">
            @if ($listing->images && is_iterable($listing->images))
                @foreach ($listing->images as $image)
                    <div class="dlf-flew">
                        <a target="_blank" href="{{ asset($image->images) }}" class="mfp-gallery">
                            <img src="{{ asset($image->images) }}" class="img-fluid mx-auto" alt="" />
                        </a>
                    </div>
                @endforeach
            @else
                <p>No images available for this listing.</p>
            @endif
        </div>
        <div class="Goodup-ops-bhri">
            <div class="Goodup-lkp-flex d-flex align-items-start justify-content-start">
                <div class="Goodup-lkp-thumb">
                    <img src="{{ asset('front/img/burger-king.png') }}" class="img-fluid" width="90" alt="" />
                </div>
                <div class="Goodup-lkp-caption ps-3">
                    <div class="Goodup-lkp-title">
                        <h1 class="text-light mb-0 ft-bold">{{ $listing->title }}</h4>
                    </div>
                    {{-- <div class="Goodup-ft-first">
                        <div class="Goodup-rating">
                           @php
                                    $totalStars = 0;
                                    $totalReviews = count($review);
                                
                                    if ($totalReviews > 0) {
                                        foreach ($review as $reviews) {
                                            $totalStars += $reviews->star;
                                        }
                                
                                        $averageStars = round($totalStars / $totalReviews, 2);
                                        $percentage = round($totalStars / $totalReviews);
                                    } else {
                                        $averageStars = 0;
                                        $percentage = 0;
                                    }
                                    
                                     $percentage = round($totalStars / $totalReviews);
                                @endphp


                            <div class="Goodup-rates">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $averageStars)
                                        <i class="fas fa-star"></i>
                                    @else
                                        <i class="far fa-star"></i>
                                    @endif
                                @endfor
                            </div>

                        </div>
                        <div class="Goodup-price-range">
                            <span class="ft-medium text-light">{{ $totalReviews }}  Reviews  </span> 
                        </div>
                    </div> --}}

                    <div class="Goodup-ft-first">
                        <div class="Goodup-rating">
                            @php
                                $totalStars = 0;
                                $totalReviews = count($review);
                            
                                if ($totalReviews > 0) {
                                    foreach ($review as $reviews) {
                                        $totalStars += $reviews->star;
                                    }
                                
                                    $averageStars = round($totalStars / $totalReviews, 2);
                                    $percentage = round($averageStars);
                                } else {
                                    $averageStars = 0;
                                    $percentage = 0;
                                }
                            @endphp
                    
                            <div class="Goodup-rates">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $averageStars)
                                        <i class="fas fa-star"></i>
                                    @else
                                        <i class="far fa-star"></i>
                                    @endif
                                @endfor
                            </div>
                        </div>
                        <div class="Goodup-price-range">
                            <span class="ft-medium text-light">{{ $totalReviews }} Reviews</span> 
                        </div>
                    </div>
                    

                    {{-- {{ $averageStars }}% --}}
                    <div class="d-block mt-3">
                        <div class="list-lioe">
                            <div class="list-lioe-single"><span class="ft-medium text-info"><i
                                        class="fas fa-check-circle me-1"></i>Keywords</span></div>
                            <div class="list-lioe-single ms-2 ps-3 seperate">
                                @foreach ($listing->keywords as $listing_keywords)
                                    <a href="javascript:void(0);"
                                        class="text-light ft-medium">{{ $listing_keywords->keywords }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="d-block mt-1">
                        <div class="list-lioe">
                            <div class="list-lioe-single"><span class="ft-medium text-danger">Today</span>
                                @php
                                    $currentDayOfWeek = date('N');
                                    $currentDayName = strtolower(date('l'));

                                    $currentDayOpeningKey = $currentDayName . '_opening_time';
                                    $currentDayClosingKey = $currentDayName . '_closing_time';

                                    $openingTime = $listing->infos[$currentDayOpeningKey];
                                    $closingTime = $listing->infos[$currentDayClosingKey];
                                @endphp

                                <span class="text-light ft-medium ms-2">
                                    @if ($openingTime == 'Closed' && $closingTime == 'Closed')
                                        Closed
                                    @else
                                        {{ $openingTime }} - {{ $closingTime }}
                                    @endif
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Searchbar Banner ======================== -->

    <!-- ============================ Listing Details Start ================================== -->
    <section class="gray py-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">

                    <!-- About The Business -->
                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-4 py-4">
                            <div class="jbd-details">
                                <h5 class="ft-bold fs-lg">About the Business</h5>

                                <div class="d-block mt-3">
                                    <p>{{ $listing->description }}</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    @if (count($listing->menuitems) > 0)
                        <!-- Business Menu -->
                        <div class="bg-white rounded mb-4">
                            <div class="jbd-01 px-4 py-4">
                                <div class="jbd-details mb-4">
                                    <h5 class="ft-bold fs-lg">Business Menu</h5>

                                    <div class="d-block mt-3">
                                        <div class="row g-3">
                                            @foreach ($listing->menuitems as $listing_menuitems)
                                                <!-- Single Menu -->
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="Goodup-sng-menu">
                                                        <div class="Goodup-sng-menu-thumb">
                                                            <img src="{{ asset($listing_menuitems->image) }}"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                        <div class="Goodup-sng-menu-caption">
                                                            <h4 class="ft-medium fs-md">{{ $listing_menuitems->item_name }}
                                                            </h4>
                                                            <div class="lkji-oiyt"><span>Start From</span>
                                                                <h5 class="theme-cl ft-bold">
                                                                    {{ $listing_menuitems->price }}
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endif


                    <!-- Amenities and More -->
                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-4 py-4">
                            <div class="jbd-details mb-4">
                                <h5 class="ft-bold fs-lg">Amenities and More</h5>

                                <div class="Goodup-all-features-list mt-3">
                                    <ul>
                                        @foreach ($listing->amenties as $listing_amenties)
                                            <li>
                                                <div class="Goodup-afl-pace"><img src="{{ asset('front/img/verify.svg') }}"
                                                        class=""
                                                        alt="" /><span>{{ $listing_amenties->amenities }}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Recommended Reviews -->
                    @if (count($review) > 0)
                        <div class="bg-white rounded mb-4">
                            <div class="jbd-01 px-4 py-4">
                                <div class="jbd-details mb-4">
                                    <h5 class="ft-bold fs-lg">Recommended Reviews</h5>
                                    <div class="reviews-comments-wrap">
                                        @foreach ($review as $reviews)
                                            <div class="reviews-comments-item">
                                                <div class="review-comments-avatar">
                                                    @if (isset($reviews->user->image))
                                                        <img src="{{ asset($reviews->user->image) }}" class="img-fluid"
                                                            alt="">
                                                    @else
                                                        <img src="{{ asset('front/img/user.png') }}" class="img-fluid"
                                                            alt="">
                                                    @endif
                                                </div>
                                                <div class="reviews-comments-item-text">
                                                    <h4><a>
                                                        @if(auth()->check() && auth()->user()->name == $reviews->name)
                                                            You
                                                        @else
                                                          {{$reviews->name}}
                                                        @endif
                                                    
                                                        </a>
                                                        <span
                                                            class="reviews-comments-item-date"><i
                                                                class="ti-calendar theme-cl me-1"></i>{{ $reviews->created_at->format('d M Y') }}
                                                        </span>
                                                    </h4>

                                                    @if ($reviews->star == 1)
                                                        <div class="listing-rating high">
                                                            <i class="fas fa-star active"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    @elseif ($reviews->star == 2)
                                                        <div class="listing-rating high">
                                                            <i class="fas fa-star active"></i>
                                                            <i class="fas fa-star active"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    @elseif ($reviews->star == 3)
                                                        <div class="listing-rating high">
                                                            <i class="fas fa-star active"></i>
                                                            <i class="fas fa-star active"></i>
                                                            <i class="fas fa-star active"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    @elseif ($reviews->star == 4)
                                                        <div class="listing-rating high">
                                                            <i class="fas fa-star active"></i><i
                                                                class="fas fa-star active"></i><i
                                                                class="fas fa-star active"></i><i
                                                                class="fas fa-star active"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    @elseif ($reviews->star == 5)
                                                        <div class="listing-rating high">
                                                            <i class="fas fa-star active"></i><i
                                                                class="fas fa-star active"></i><i
                                                                class="fas fa-star active"></i><i
                                                                class="fas fa-star active"></i><i
                                                                class="fas fa-star active"></i>
                                                        </div>
                                                    @else
                                                        <!-- Handle the case where $reviews->star is not 1, 2, 3, 4, or 5 -->
                                                    @endif

                                                    <div class="clearfix"></div>
                                                    <p>{{ $reviews->review }}</p>                                                    
                                                </div>
                                            </div>
                                        @endforeach                                      

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


                    <!-- Location & Hours -->
                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-4 py-4">
                            <div class="jbd-details mb-4">
                                <h5 class="ft-bold fs-lg">Location & Hours</h5>
                                <div class="Goodup-lot-wrap d-block">
                                    <div class="row g-4">
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="list-map-lot">
                                                {{-- <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.0148908503734!2d80.97350361499701!3d26.871267983145383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd9a9f6d1727%3A0xb87eabf63f7e4cee!2sCafe%20Repertwahr!5e0!3m2!1sen!2sin!4v1649059491407!5m2!1sen!2sin"
                                                    width="100%" height="250" style="border:0;" allowfullscreen=""
                                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                                            </div>
                                            <div class="list-map-capt">
                                                <div class="lio-pact"><span
                                                        class="ft-medium text-info">{{ $listing->address }}</span></div>
                                                <div class="lio-pact"><span
                                                        class="hkio-oilp ft-bold">{{ $listing->city . $listing->state }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>Mon</td>
                                                        <td>
                                                            @if ($listing->infos->monday_opening_time == 'Closed' && $listing->infos->monday_closing_time == 'Closed')
                                                                Closed
                                                            @else
                                                                {{ $listing->infos->monday_opening_time }} -
                                                                {{ $listing->infos->monday_closing_time }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tue</td>
                                                        <td>
                                                            @if ($listing->infos->tuesday_opening_time == 'Closed' && $listing->infos->tuesday_closing_time == 'Closed')
                                                                Closed
                                                            @else
                                                                {{ $listing->infos->tuesday_opening_time }} -
                                                                {{ $listing->infos->tuesday_closing_time }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wed</td>
                                                        <td>
                                                            @if ($listing->infos->wednesday_opening_time == 'Closed' && $listing->infos->wednesday_closing_time == 'Closed')
                                                                Closed
                                                            @else
                                                                {{ $listing->infos->wednesday_opening_time }} -
                                                                {{ $listing->infos->wednesday_closing_time }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Thu</td>
                                                        <td>
                                                            @if ($listing->infos->thursday_opening_time == 'Closed' && $listing->infos->thursday_closing_time == 'Closed')
                                                                Closed
                                                            @else
                                                                {{ $listing->infos->thursday_opening_time }} -
                                                                {{ $listing->infos->thursday_closing_time }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fri</td>
                                                        <td>
                                                            @if ($listing->infos->friday_opening_time == 'Closed' && $listing->infos->friday_closing_time == 'Closed')
                                                                Closed
                                                            @else
                                                                {{ $listing->infos->friday_opening_time }} -
                                                                {{ $listing->infos->friday_closing_time }}
                                                            @endif
                                                        </td>
                                                    </tr>


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Drop Your Review -->
                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-4 py-4">
                            <div class="jbd-details mb-4">
                                <h5 class="ft-bold fs-lg">Drop Your Review</h5>
                                <div class="review-form-box form-submit mt-3">
                                    <form action="{{ route('user.review') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            

                                            @if(auth()->check())
                                                <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                                    <div class="form-group mb-3">
                                                        <label class="ft-medium small mb-1">Name</label>
                                                        <input name="list_id" type="hidden" value="{{ $listing->id }}">
                                                        <input class="form-control rounded" name="name" type="text" placeholder="Your Name" value="{{ auth()->user()->name }}" readonly>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                                    <div class="form-group mb-3">
                                                        <label class="ft-medium small mb-1">Email</label>
                                                        <input class="form-control rounded" name="email" type="email" placeholder="Your Email" value="{{ auth()->user()->email }}" readonly>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group mb-3">
                                                        <label class="ft-medium small mb-1">Name</label>
                                                        <input name="list_id" type="hidden" value="{{ $listing->id }}">
                                                        <input class="form-control rounded" name="name" type="text" placeholder="Your Name">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group mb-3">
                                                        <label class="ft-medium small mb-1">Email</label>
                                                        <input class="form-control rounded" name="email" type="email" placeholder="Your Email">
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group mb-3">
                                                     <label class="ft-medium small mb-1">Choose Rate</label> 
                                                    {{-- <select class="form-control rounded" name="star">
                                                        <option>Choose Rating</option>
                                                        <option value="1">1 Star</option>
                                                        <option value="2">2 Star</option>
                                                        <option value="3">3 Star</option>
                                                        <option value="4">4 Star</option>
                                                        <option value="5">5 Star</option>
                                                    </select> --}}

                                                   
                                                        <div class="rating">
                                                          <input type="radio" name="star" id="rating-5" value="5" required>
                                                          <label for="rating-5"></label>
                                                          <input type="radio" name="star" id="rating-4" value="4" required>
                                                          <label for="rating-4"></label>
                                                          <input type="radio" name="star" id="rating-3" value="3" required>
                                                          <label for="rating-3"></label>
                                                          <input type="radio" name="star" id="rating-2" value="2" required>
                                                          <label for="rating-2"></label>
                                                          <input type="radio" name="star" id="rating-1" value="1" required>
                                                          <label for="rating-1"></label>
                                                          <div class="emoji-wrapper">
                                                            <div class="emoji">
                                                                <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                                <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534"/>
                                                                <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff"/>
                                                                <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>
                                                                <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>
                                                                <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff"/>
                                                                <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>
                                                                <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63"/>
                                                                <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347"/>
                                                                </svg>
                                                                <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                                <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                                <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347"/>
                                                                <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534"/>
                                                                <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff"/>
                                                                <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347"/>
                                                                <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff"/>
                                                                <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534"/>
                                                                <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff"/>
                                                                <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347"/>
                                                                <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff"/>
                                                                </svg>
                                                                <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                                <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                                <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347"/>
                                                                <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff"/>
                                                                <circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>
                                                                <g fill="#fff">
                                                                    <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10"/>
                                                                    <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>
                                                                </g>
                                                                <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>
                                                                <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff"/>
                                                                </svg>
                                                                <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                                    <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347"/>
                                                                    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                                    <g fill="#fff">
                                                                    <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>
                                                                    <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>
                                                                    </g>
                                                                    <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                                                                    <g fill="#fff">
                                                                    <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1"/>
                                                                    <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>
                                                                    </g>
                                                                    <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                                                                    <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff"/>
                                                                </svg>
                                                                <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                                <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                                <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                                                                <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f"/>
                                                                <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                                                                <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                                                                <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f"/>
                                                                <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                                                                <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347"/>
                                                                <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b"/>
                                                                </svg>
                                                                <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <g fill="#ffd93b">
                                                                    <circle cx="256" cy="256" r="256"/>
                                                                    <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>
                                                                </g>
                                                                <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4"/>
                                                                <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea"/>
                                                                <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88"/>
                                                                <g fill="#38c0dc">
                                                                    <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>
                                                                </g>
                                                                <g fill="#d23f77">
                                                                    <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>
                                                                </g>
                                                                <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347"/>
                                                                <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b"/>
                                                                <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2"/>
                                                                </svg>
                                                                </div>
                                                          </div>
                                                        </div>
                                                     
                                                </div>
                                            </div>                                         
                                            
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="ft-medium small mb-1">Write Your Experience</label>
                                                    <textarea class="form-control rounded ht-140" name="review" placeholder="Write Your Experience" required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn theme-bg text-light rounded">Submit
                                                        Review</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <!-- Business Inof -->
                    <div class="jb-apply-form bg-white rounded py-4 px-4 box-static mb-4">
                        <div class="uli-list-info">
                            <ul>
                                @if (isset($listing->website))
                                    <li>
                                        <div class="list-uiyt">
                                            <div class="list-iobk"><i class="fas fa-globe"></i></div>
                                            <div class="list-uiyt-capt">
                                                <h5>Live Site</h5>
                                                <p><a href="{{ $listing->website }}"
                                                        target="_blank">{{ $listing->website }}</a></p>
                                            </div>
                                        </div>
                                    </li>
                                @endif

                                @if (isset($listing->email))
                                    <li>
                                        <div class="list-uiyt">
                                            <div class="list-iobk"><i class="fas fa-envelope"></i></div>
                                            <div class="list-uiyt-capt">
                                                <h5>Drop a Mail</h5>
                                                <p><a href="mailto:{{ $listing->email }}">{{ $listing->email }}</a></p>
                                            </div>
                                        </div>
                                    </li>
                                @endif

                                @if (isset($listing->mobile))
                                    <li>
                                        <div class="list-uiyt">
                                            <div class="list-iobk"><i class="fas fa-phone"></i></div>
                                            <div class="list-uiyt-capt">
                                                <h5>Call Us</h5>
                                                <p> <a href="tel:{{ $listing->mobile }}">{{ $listing->mobile }}</a></p>
                                            </div>
                                        </div>
                                    </li>
                                @endif

                                @if (isset($listing->address))
                                    <li>
                                        <div class="list-uiyt">
                                            <div class="list-iobk"><i class="fas fa-map-marker-alt"></i></div>
                                            <div class="list-uiyt-capt">
                                                <h5>Get Directions</h5>
                                                <p>{{ $listing->address }}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('front.subscribe')




    <div class="container">
       
      </div>


@stop
