@extends('layout.app')
@section('style')

    <style>
        .preview-color{
            float:right;
            width: 15px;
            height: 15px;
            margin-left:15px;
        }
    </style>

@endsection
@section('content')
<section id="secondary-banner" class="dynamic-image-8"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h2>Inventory Listing</h2>
                <h4>Powerful Inventory Marketing, Fully Integrated</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 ">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Inventory</a></li>
                    <li>Inventory Listing</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--secondary-banner ends-->
<div class="message-shadow"></div>
<div class="clearfix"></div>
<section class="content">
    <div class="container">
        <div class="inner-page inventory-listing">
            <div class="inventory-heading margin-bottom-10 clearfix">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <h2>{{ $auction->car->title }}</h2>
                        <span class="margin-top-10">
                        </span>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-right">
                        <h2>{{ Helper::currencySymbol().$auction->bid_starting_amount }}</h2>
                </div>
            </div>
            <div class="content-nav margin-bottom-30">

            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 left-content padding-left-none">
                    <!--OPEN OF SLIDER-->
                    <div class="listing-slider">
                        <section class="slider home-banner">
                            <div class="flexslider" id="home-slider-canvas">
                                <ul class="slides">
                                    <li data-thumb="images/boxster1_slide.jpg"> <img src="{{url('images/2017/default-images')}}/boxster1_slide.jpg" alt="" data-full-image="images/boxster1.jpg" /> </li>
                                    <li data-thumb="images/boxster4_slide.jpg"> <img src="{{url('images/2017/default-images')}}/boxster4_slide.jpg" alt="" data-full-image="images/boxster4.jpg" /> </li>
                                    <li data-thumb="images/boxster5_slide.jpg"> <img src="{{url('images/2017/default-images')}}/boxster5_slide.jpg" alt="" data-full-image="images/boxster5.jpg" /> </li>
                                    <li data-thumb="images/boxster8_slide.jpg"> <img src="{{url('images/2017/default-images')}}/boxster8_slide.jpg" alt="" data-full-image="images/boxster8.jpg" /> </li>
                                    <li data-thumb="images/boxster10_slide.jpg"><img src="{{url('images/2017/default-images')}}/boxster10_slide.jpg" alt="" data-full-image="images/boxster10.jpg" /> </li>
                                    <!-- full -->
                                    <li data-thumb="images/boxster2_slide.jpg"> <img src="{{url('images/2017/default-images')}}/boxster2_slide.jpg" alt="" data-full-image="images/boxster2.jpg" /> </li>
                                    <li data-thumb="images/boxster3_slide.jpg"> <img src="{{url('images/2017/default-images')}}/boxster3_slide.jpg" alt="" data-full-image="images/boxster3.jpg" /> </li>
                                    <li data-thumb="images/boxster6_slide.jpg"> <img src="{{url('images/2017/default-images')}}/boxster6_slide.jpg" alt="" data-full-image="images/boxster6.jpg" /> </li>
                                    <li data-thumb="images/boxster7_slide.jpg"> <img src="{{url('images/2017/default-images')}}/boxster7_slide.jpg" alt="" data-full-image="images/boxster7.jpg" /> </li>
                                    <li data-thumb="images/boxster9_slide.jpg"> <img src="{{url('images/2017/default-images')}}/boxster9_slide.jpg" alt="" data-full-image="images/boxster9.jpg" /> </li>
                                    <li data-thumb="images/boxster11_slide.jpg"> <img src="{{url('images/2017/default-images')}}/boxster11_slide.jpg" alt="" data-full-image="images/boxster11.jpg" /> </li>
                                    <li data-thumb="images/boxster12_slide.jpg"> <img src="{{url('images/2017/default-images')}}/boxster12_slide.jpg" alt="" data-full-image="images/boxster12.jpg" /> </li>
                                    <li data-thumb="images/boxster13_slide.jpg"> <img src="{{url('images/2017/default-images')}}/boxster13_slide.jpg" alt="" data-full-image="images/boxster13.jpg" /> </li>
                                    <li data-thumb="images/boxster14_slide.jpg"> <img src="{{url('images/2017/default-images')}}/boxster14_slide.jpg" alt="" data-full-image="images/boxster14.jpg" /> </li>
                                </ul>
                            </div>
                        </section>
                        <section class="home-slider-thumbs">
                            <div class="flexslider" id="home-slider-thumbs">
                                <ul class="slides">
                                    <li data-thumb="images/thumbnail1.jpg"> <a href="#"><img src="{{url('images/2017/default-images')}}/thumbnail1.jpg" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail2.jpg"> <a href="#"><img src="{{url('images/2017/default-images')}}/thumbnail2.jpg" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail3.jpg"> <a href="#"><img src="{{url('images/2017/default-images')}}/thumbnail3.jpg" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail4.jpg"> <a href="#"><img src="{{url('images/2017/default-images')}}/thumbnail4.jpg" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail5.jpg"> <a href="#"><img src="{{url('images/2017/default-images')}}/thumbnail5.jpg" alt="" /></a> </li>
                                    <!-- full -->
                                    <li data-thumb="images/thumbnail6.jpg"> <a href="#"><img src="{{url('images/2017/default-images')}}/thumbnail6.jpg" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail7.jpg"> <a href="#"><img src="{{url('images/2017/default-images')}}/thumbnail7.jpg" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail8.jpg"> <a href="#"><img src="{{url('images/2017/default-images')}}/thumbnail8.jpg" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail9.jpg"> <a href="#"><img src="{{url('images/2017/default-images')}}/thumbnail9.jpg" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail10.jpg"> <a href="#"><img src="{{url('images/2017/default-images')}}/thumbnail10.jpg" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail11.jpg"> <a href="#"><img src="{{url('images/2017/default-images')}}/thumbnail11.jpg" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail12.jpg"> <a href="#"><img src="{{url('images/2017/default-images')}}/thumbnail12.jpg" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail13.jpg"> <a href="#"><img src="{{url('images/2017/default-images')}}/thumbnail13.jpg" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail14.jpg"> <a href="#"><img src="{{url('images/2017/default-images')}}/thumbnail14.jpg" alt="" /></a> </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <!--CLOSE OF SLIDER-->
                    <!--Slider End-->
                    <div class="clearfix"></div>
                    <div class="bs-example bs-example-tabs example-tabs margin-top-50">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#features" data-toggle="tab">Features &amp; Options</a></li>
                            <li><a href="#technical" data-toggle="tab">Technical Specifications</a></li>
                            <li><a href="#location" data-toggle="tab">Vehicle Location</a></li>
                            <li><a href="#comments" data-toggle="tab">Other Comments</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content margin-top-15 margin-bottom-20">
                            <div class="tab-pane fade active in" id="features">
                                <ul class="fa-ul">
                                    @foreach($auction->car->features as $feature)
                                        <li><i class="fa-li fa fa-check"></i> {{ $feature->title }}</li>

                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="technical">
                                <table class="technical">
                                    <thead>
                                    <tr>
                                        <th>Engine</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Layout / number of cylinders</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>Displacement</td>
                                        <td>3.4 l</td>
                                    </tr>
                                    <tr>
                                        <td>Engine Layout</td>
                                        <td>Mid-engine</td>
                                    </tr>
                                    <tr>
                                        <td>Horespower</td>
                                        <td>315 hp</td>
                                    </tr>
                                    <tr>
                                        <td>@ rpm</td>
                                        <td>6,700 rpm</td>
                                    </tr>
                                    <tr>
                                        <td>Torque</td>
                                        <td>266 lb.-ft.</td>
                                    </tr>
                                    <tr>
                                        <td>Compression ratio</td>
                                        <td>12.5 : 1</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                    <tr>
                                        <th>Performance</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Top Track Speed</td>
                                        <td>173 mph</td>
                                    </tr>
                                    <tr>
                                        <td>0 - 60 mph</td>
                                        <td>4.8 s</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                    <tr>
                                        <th>Transmission</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Manual Gearbox</td>
                                        <td>6-speed with dual-mass flywheel and self-adjusting clutch</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                    <tr>
                                        <th>Fuel consumption</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>City (estimate)</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>Highway (estimate)</td>
                                        <td>28</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                    <tr>
                                        <th>Body</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Length</td>
                                        <td>172.2 in.</td>
                                    </tr>
                                    <tr>
                                        <td>Width</td>
                                        <td>70.9 in.</td>
                                    </tr>
                                    <tr>
                                        <td>Height</td>
                                        <td>50.4 in.</td>
                                    </tr>
                                    <tr>
                                        <td>Wheelbase</td>
                                        <td>97.4 in.</td>
                                    </tr>
                                    <tr>
                                        <td>Maximum payload</td>
                                        <td>739 lbs</td>
                                    </tr>
                                    <tr>
                                        <td>Curb weight</td>
                                        <td>2910 lbs</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                    <tr>
                                        <th>Capacities</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Luggage compartment volume</td>
                                        <td>5.3 cu. ft. (front) / 4.6 cu. ft. (rear)</td>
                                    </tr>
                                    <tr>
                                        <td>Fuel Tank Capacity</td>
                                        <td>16.9 gal.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="location">
                                <div id='google-map-listing' class="contact" data-longitude='-79.38' data-latitude='43.65' data-zoom='11' style="height: 350px;" data-parallax="false"></div>
                            </div>
                            <div class="tab-pane fade" id="comments">
                                <p>Vestibulum sit amet ligula eget nibh cursus bibendum et id eros. Nam congue, dui quis consectetur blandit, neque neque mattis diam,
                                    vitae egestas urna lectus eu turpis. In vitae commodo sem. Etiam vehicula sed ligula malesuada cursus. Cras augue elit, tempus at dignissim
                                    sed, egestas eget leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam mollis luctus nibh et
                                    bibendum. Morbi congue lectus nec congue congue. Nulla molestie feugiat quam ac sollicitudin. Nulla sed congue lectus. Donec blandit elit
                                    sit amet aliquet laoreet.</p>
                                <p><img src="{{url('images/2017/default-images')}}/engine.png" alt="engine" /></p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 right-content padding-right-none">
                    <div class="side-content">
                        <div class="car-info margin-bottom-50">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>MODEL:</td>
                                        <td>{{ $auction->car->carModel->model_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>COMPANY:</td>
                                        <td>{{ $auction->car->carModel->carCompany->company_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Body Style:</td>
                                        <td>{{ $auction->car->body_type }}</td>
                                    </tr>
                                    <tr>
                                        <td>ENGINE:</td>
                                        <td>{{ $auction->car->engineType->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>TRANSMISSION:</td>
                                        <td>{{ $auction->car->transmission }}</td>
                                    </tr>
                                    <tr>
                                        <td>YEAR:</td>
                                        <td>{{ $auction->car->manufacturing_year }}</td>
                                    </tr>
                                    <tr>
                                        <td>TRIM:</td>
                                        <td>{{ $auction->car->trim }}</td>
                                    </tr>
                                    <tr>
                                        <td>EXTERIOR COLOR:</td>
                                        <td>{{ $auction->car->exterior_color }}
                                            <div class="preview-color" style="background-color: {{ $auction->car->exterior_color }};"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>INTERIOR COLOR:</td>
                                        <td>{{ $auction->car->interior_color }}
                                            <div class="preview-color" style="background-color: {{ $auction->car->interior_color }};"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>GRADE:</td>
                                        <td>{{ $auction->car->grade }}</td>
                                    </tr>
                                    <tr>
                                        <td>KILOMETERS:</td>
                                        <td>{{ $auction->car->kilometers }}</td>
                                    </tr>
                                    <tr>
                                        <td>ENGINE #:</td>
                                        <td>{{ $auction->car->engine_number }}</td>
                                    </tr>
                                    <tr>
                                        <td>CHASSIS #:</td>
                                        <td>{{ $auction->car->chassis_number }}</td>
                                    </tr>
                                    <tr>
                                        <td>PLATE #:</td>
                                        <td>{{ $auction->car->number_plate }}</td>
                                    </tr>
                                    <tr>
                                        <td>CITY #:</td>
                                        <td>{{ $auction->car->city_of_registration }}</td>
                                    </tr>
                                    <tr>
                                        <td>DRIVETRAIN #:</td>
                                        <td>{{ $auction->car->drivetrain }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="efficiency-rating text-center padding-vertical-15 margin-bottom-40">
                            <h3>Fuel Efficiency Rating</h3>
                            <ul>
                                <li class="city_mpg"><small>City MPG:</small> <strong>20</strong></li>
                                <li class="fuel"><img src="{{url('images/2017/default-images')}}/images/fuel-icon.png" alt="" class="aligncenter"></li>
                                <li class="hwy_mpg"><small>Hwy MPG:</small> <strong>28</strong></li>
                            </ul>
                            <p>Actual rating will vary with options, driving conditions,
                                driving habits and vehicle condition.</p>
                        </div>

                        <div class="clearfix"></div>
                        <div class="financing_calculator margin-top-40">
                            <h3>FINANCING CALCULATOR</h3>
                            <div class="table-responsive">
                                <table class="table no-border no-margin">
                                    <tbody>
                                    <tr>
                                        <td>Cost of Vehicle ($):</td>
                                        <td><input type="text"  class="number cost" placeholder="10000" /></td>
                                    </tr>
                                    <tr>
                                        <td>Down Payment ($):</td>
                                        <td><input type="text"  class="number down_payment" placeholder="1000" /></td>
                                    </tr>
                                    <tr>
                                        <td>Annual Interest Rate (%):</td>
                                        <td><input type="text"  class="number interest" placeholder="7" /></td>
                                    </tr>
                                    <tr>
                                        <td>Term of Loan in Years:</td>
                                        <td><input type="text"  class="number loan_years" placeholder="5" /></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bi_weekly clearfix">
                                <div class="pull-left">Frequency of Payments:</div>
                                <div class="dropdown_container ">
                                    <select class="frequency css-dropdowns">
                                        <option value='0'>Bi-Weekly</option>
                                        <option value='1'>Weekly</option>
                                        <option value='2'>Monthly</option>
                                    </select>
                                </div>
                            </div>
                            <a class="btn-inventory pull-right calculate">Calculate My Payment</a>
                            <div class="clear"></div>
                            <div class="calculation">
                                <div class="table-responsive">
                                    <table>
                                        <tr>
                                            <td><strong>NUMBER OF PAYMENTS:</strong></td>
                                            <td><strong class="payments">60</strong></td>
                                        </tr>
                                        <tr>
                                            <td><strong>PAYMENT AMOUNT:</strong></td>
                                            <td><strong class="payment_amount">$ 89.11</strong></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--container ends-->
</section>
<!--content ends-->
<div class="clearfix"></div>

    @endsection