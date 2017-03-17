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
                        <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car1.jpg" alt="" class="img-responsive"> </div>
                        <div class="car-block-bottom">
                            <h6><strong>{{ $listing->car->title }}</strong></h6>
                            <h6>{{ $listing->car->kilometers }} kilometers</h6>
                            <h5>{{ Helper::currencySymbol() }} {{ $listing->bid_starting_amount }}</h5>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
                <div class="slide">
                    <div class="car-block">
                        <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car2.jpg" alt="" class="img-responsive"> </div>
                        <div class="car-block-bottom">
                            <h6><strong>2009 Porsche Boxster</strong></h6>
                            <h6>New Tires, 26,273 miles</h6>
                            <h5>$ 34,995</h5>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="car-block">
                        <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car3.jpg" alt="" class="img-responsive"> </div>
                        <div class="car-block-bottom">
                            <h6><strong>2013 Porsche Panamera S</strong></h6>
                            <h6>Demonstrator, 7,088 miles</h6>
                            <h5>$ 63,995</h5>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="car-block">
                        <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car4.jpg" alt="" class="img-responsive"> </div>
                        <div class="car-block-bottom">
                            <h6><strong>2010 Porsche Carrera 4S</strong></h6>
                            <h6>AWD, 21,900 miles</h6>
                            <h5>$ 73,995</h5>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="car-block">
                        <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car5.jpg" alt="" class="img-responsive"> </div>
                        <div class="car-block-bottom">
                            <h6><strong>2012 Porsche Carrera S</strong></h6>
                            <h6>Convertible, 22,158 miles</h6>
                            <h5>$ 56,995</h5>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="car-block">
                        <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car6.jpg" alt="" class="img-responsive"> </div>
                        <div class="car-block-bottom">
                            <h6><strong>2013 Porsche Panamera GTS</strong></h6>
                            <h6>1 Owner, 3,914 miles</h6>
                            <h5>$ 94,995</h5>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="car-block">
                        <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car7.jpg" alt="" class="img-responsive"> </div>
                        <div class="car-block-bottom">
                            <h6><strong>2014 Porsche Cayenne GTS</strong></h6>
                            <h6>1 Owner, 7 miles</h6>
                            <h5>$ 114,995</h5>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="car-block">
                        <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car8.jpg" alt="" class="img-responsive"> </div>
                        <div class="car-block-bottom">
                            <h6><strong>2014 Porsche GTS</strong></h6>
                            <h6>1 Owner, 5 miles</h6>
                            <h5>$ 99,995</h5>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="car-block">
                        <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car9.jpg" alt="" class="img-responsive"> </div>
                        <div class="car-block-bottom">
                            <h6><strong>2009 Porsche Carrera 4S</strong></h6>
                            <h6>1 Owner, 114,239 miles</h6>
                            <h5>$ 39,995</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
