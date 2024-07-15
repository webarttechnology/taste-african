@foreach ($listings as $listing)
    <div class="dsd-single-listing-wraps">
        <div class="dsd-single-lst-thumb">
            <img src="{{ asset($listing->images[0]->images) }}" class="img-fluid" alt="" />
        </div>
        <div class="dsd-single-lst-caption">
            <div class="dsd-single-lst-title">
                <h5>{{ $listing->title }}</h5>
            </div>
            <span class="agd-location">
                <i class="fa fa-user-o" aria-hidden="true"></i>Author:
                <a href="{{ url('author-deatils/' . $listing->user->id) }}" class="dsd-single-lst-title">
                    {{ $listing->user->name }}
                </a>
            </span>
            <div class="ico-content">
                @php
                    $totalStars = 0;
                    $totalReviews = count($listing->reviews);
                    foreach ($listing->reviews as $review) {
                        $totalStars += $review->star;
                    }
                    $averageStars = $totalReviews > 0 ? round($totalStars / $totalReviews, 2) : 0;
                @endphp
                <div class="Goodup-ft-first">
                    <div class="Goodup-rating">
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
                        <span class="ft-medium">{{ $totalReviews }} Reviews</span>
                    </div>
                </div>
            </div>
            <div class="dsd-single-lst-footer">
                @auth
                <a href="{{ url('user/author-listing-details/' . $listing->id) }}" class="btn btn-edit mr-1">
                    <i class="fas fa-eye me-1"></i>View 
                </a>
                @endauth
              
             @guest
                <a href="{{ url('business-listing/details/' . $listing->id) }}" class="btn btn-edit mr-1">
                    <i class="fas fa-eye me-1"></i>View 
                </a>
                 @endguest
            </div>
        </div>
    </div>
@endforeach