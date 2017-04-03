<div class="recent-vehicles-wrap margin-top-30 sm-padding-left-none padding-bottom-40">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 recent-vehicles padding-left-none">
            <h5 class="margin-top-none">Recent Vehicles</h5>
            <p>Browse through the vast
                selection of vehicles that
                have recently been added
                to our inventory.</p>
            <div class="arrow3 clearfix margin-top-15 xs-margin-bottom-25" id="slideControls3"><span class="prev-btn"></span><span class="next-btn"></span></div>
        </div>
        <div class="col-md-10 col-sm-8 padding-right-none xs-padding-left-none">
            <div class="carasouel-slider3">
                @if(count($listings))

                    @foreach($listings as $listing)
                <div class="slide">
                    <div class="car-block">
                        <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a>
                            <img
                                    src="{{ isset($listing->car->meta[0]) ? asset($listing->car->meta[0]->meta_value) : asset('images/image-not-found-100x100.png') }}"  alt="" class="img-responsive">
                        </div>
                        <div class="car-block-bottom">
                            <h6><strong>{{ $listing->car->title }}</strong></h6>
                            <h6>{{ $listing->car->kilometers }} kilometers</h6>
                            <h5>{{ Helper::currencySymbol() }} {{ $listing->bid_starting_amount }}</h5>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
</div>
