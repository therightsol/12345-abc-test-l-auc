@extends('layout.app')

@section('content')


    <section id="secondary-banner" class="dynamic-image-1"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12">
                    <h2>Inventory</h2>
                    <h4>Unlimited Listings, Any Vehicle Type</h4>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Inventory</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--#secondary-banner ends-->
    <div class="message-shadow"></div>
    <div class="clearfix"></div>

    <section class="content">
        <div class="container">
            <div class="inner-page row">
                @include('auction._form')

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="full-width">
                        <div class="content-wrap">
                            <div class="row car_listings">
                                <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                    <input type="checkbox" name="a" class="checkbox compare_vehicle input-checkbox" id="vehicle_1" />
                                    <label for="vehicle_1"></label>
                                    <a class="inventory" href="inventory-listing.html">
                                        <div class="title">2012 Porsche Cayenne GTS Sport Utility SUV</div>
                                        <img src="http://demo.themesuite.com/automotive/images/car-1-200x150.jpg" class="preview" alt="preview">
                                        <table class="options-primary">
                                            <tr>
                                                <td class="option primary">Body Style:</td>
                                                <td class="spec">Sport Utility Vehicle</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Drivetrain:</td>
                                                <td class="spec">4WD</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Engine:</td>
                                                <td class="spec">4.8L V8</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Transmission:</td>
                                                <td class="spec">8-Speed Tiptronic</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Mileage:</td>
                                                <td class="spec">19,585</td>
                                            </tr>
                                        </table>
                                        <table class="options-secondary">
                                            <tr>
                                                <td class="option secondary">Exterior Color:</td>
                                                <td class="spec">Dark Blue Metallic</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Interior Color:</td>
                                                <td class="spec">Black / Titanium Blue</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">MPG:</td>
                                                <td class="spec">15 city / 21 hwy</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Stock Number:</td>
                                                <td class="spec">590497</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">VIN Number:</td>
                                                <td class="spec">WP1AD29P09LA65818</td>
                                            </tr>
                                        </table>
                                        <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                        <div class="price"><b>Price:</b><br>
                                            <div class="figure">$102,995<br>
                                            </div>
                                            <div class="tax">Plus Sales Tax</div>
                                        </div>
                                        <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                        <div class="clearfix"></div>
                                    </a>
                                    <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                </div>
                                <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                    <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_2" />
                                    <label for="vehicle_2"></label>
                                    <a class="inventory" href="inventory-listing.html">
                                        <div class="title">2009 Porsche Boxster Base Red Convertible</div>
                                        <img src="http://demo.themesuite.com/automotive/images/car-2-200x150.jpg" class="preview" alt="preview">
                                        <table class="options-primary">
                                            <tr>
                                                <td class="option primary">Body Style:</td>
                                                <td class="spec">Convertible</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Drivetrain:</td>
                                                <td class="spec">RWD</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Engine:</td>
                                                <td class="spec">2.9L Mid-Engine V6</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Transmission:</td>
                                                <td class="spec">5-Speed Manual</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Mileage:</td>
                                                <td class="spec">26,273</td>
                                            </tr>
                                        </table>
                                        <table class="options-secondary">
                                            <tr>
                                                <td class="option secondary">Exterior Color:</td>
                                                <td class="spec">Guards Red</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Interior Color:</td>
                                                <td class="spec">Platinum Grey</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">MPG:</td>
                                                <td class="spec">20 city / 30 hwy</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Stock Number:</td>
                                                <td class="spec">590271</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">VIN Number:</td>
                                                <td class="spec">WP0AB2A74AL060306</td>
                                            </tr>
                                        </table>
                                        <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                        <div class="price"><b>Price:</b><br>
                                            <div class="figure">$34,995<br>
                                            </div>
                                            <div class="tax">Plus Sales Tax</div>
                                        </div>
                                        <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                        <div class="clearfix"></div>
                                    </a>
                                    <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                </div>
                                <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                    <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_3" />
                                    <label for="vehicle_3"></label>
                                    <a class="inventory" href="inventory-listing.html">
                                        <div class="title">2013 Porsche Panamera GTS Sedan</div>
                                        <img src="http://demo.themesuite.com/automotive/images/car-3-200x150.jpg" class="preview" alt="preview">
                                        <table class="options-primary">
                                            <tr>
                                                <td class="option primary">Body Style:</td>
                                                <td class="spec">Sedan</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Drivetrain:</td>
                                                <td class="spec">RWD</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Engine:</td>
                                                <td class="spec">4.8L V8</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Transmission:</td>
                                                <td class="spec">6-Speed Manual</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Mileage:</td>
                                                <td class="spec">32,304</td>
                                            </tr>
                                        </table>
                                        <table class="options-secondary">
                                            <tr>
                                                <td class="option secondary">Exterior Color:</td>
                                                <td class="spec">Chestnut Brown Metallic</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Interior Color:</td>
                                                <td class="spec">Luxor Beige</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">MPG:</td>
                                                <td class="spec">16 city / 24 hwy</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Stock Number:</td>
                                                <td class="spec">590476</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">VIN Number:</td>
                                                <td class="spec">WP0AB2A74AL060306</td>
                                            </tr>
                                        </table>
                                        <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                        <div class="price"><b>Price:</b><br>
                                            <div class="figure">$82,995<br>
                                            </div>
                                            <div class="tax">Plus Sales Tax</div>
                                        </div>
                                        <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                        <div class="clearfix"></div>
                                    </a>
                                    <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                </div>
                                <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                    <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_4" />
                                    <label for="vehicle_4"></label>
                                    <a class="inventory" href="inventory-listing.html">
                                        <div class="title">2010 Porsche Carrera 4S All-Wheel Drive</div>
                                        <img src="http://demo.themesuite.com/automotive/images/car-4-200x150.jpg" class="preview" alt="preview">
                                        <table class="options-primary">
                                            <tr>
                                                <td class="option primary">Body Style:</td>
                                                <td class="spec">Convertible</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Drivetrain:</td>
                                                <td class="spec">AWD</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Engine:</td>
                                                <td class="spec">3.8L V6</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Transmission:</td>
                                                <td class="spec">5-Speed Manual</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Mileage:</td>
                                                <td class="spec">21,900</td>
                                            </tr>
                                        </table>
                                        <table class="options-secondary">
                                            <tr>
                                                <td class="option secondary">Exterior Color:</td>
                                                <td class="spec">Aqua Blue Metallic</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Interior Color:</td>
                                                <td class="spec">Platinum Grey</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">MPG:</td>
                                                <td class="spec">18 city / 26 hwy</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Stock Number:</td>
                                                <td class="spec">590421</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">VIN Number:</td>
                                                <td class="spec">WP0CA2A96AS740274</td>
                                            </tr>
                                        </table>
                                        <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                        <div class="price"><b>Price:</b><br>
                                            <div class="figure">$73,995<br>
                                            </div>
                                            <div class="tax">Plus Sales Tax</div>
                                        </div>
                                        <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                        <div class="clearfix"></div>
                                    </a>
                                    <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                </div>
                                <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                    <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_5" />
                                    <label for="vehicle_5"></label>
                                    <a class="inventory" href="inventory-listing.html">
                                        <div class="title">2012 Porsche 911 Carrera S Convertible</div>
                                        <img src="http://demo.themesuite.com/automotive/images/car-5-200x150.jpg" class="preview" alt="preview">
                                        <table class="options-primary">
                                            <tr>
                                                <td class="option primary">Body Style:</td>
                                                <td class="spec">Convertible</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Drivetrain:</td>
                                                <td class="spec">RWD</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Engine:</td>
                                                <td class="spec">3.8L V6</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Transmission:</td>
                                                <td class="spec">6-Speed Automatic</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Mileage:</td>
                                                <td class="spec">9,162</td>
                                            </tr>
                                        </table>
                                        <table class="options-secondary">
                                            <tr>
                                                <td class="option secondary">Exterior Color:</td>
                                                <td class="spec">White</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Interior Color:</td>
                                                <td class="spec">Black</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">MPG:</td>
                                                <td class="spec">19 city / 27 hwy</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Stock Number:</td>
                                                <td class="spec">590435</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">VIN Number:</td>
                                                <td class="spec">WP0CB2A92CS754706</td>
                                            </tr>
                                        </table>
                                        <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                        <div class="price"><b>Price:</b><br>
                                            <div class="figure">$85,995<br>
                                            </div>
                                            <div class="tax">Plus Sales Tax</div>
                                        </div>
                                        <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                        <div class="clearfix"></div>
                                    </a>
                                    <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                </div>
                                <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                    <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_6" />
                                    <label for="vehicle_6"></label>
                                    <a class="inventory" href="inventory-listing.html">
                                        <div class="title">2013 Porsche GTS Panamera Demonstrator</div>
                                        <img src="http://demo.themesuite.com/automotive/images/car-6-200x150.jpg" class="preview" alt="preview">
                                        <table class="options-primary">
                                            <tr>
                                                <td class="option primary">Body Style:</td>
                                                <td class="spec">Sedan</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Drivetrain:</td>
                                                <td class="spec">RWD</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Engine:</td>
                                                <td class="spec">4.8L V8</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Transmission:</td>
                                                <td class="spec">6-Speed Semi-Auto</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Mileage:</td>
                                                <td class="spec">3,914</td>
                                            </tr>
                                        </table>
                                        <table class="options-secondary">
                                            <tr>
                                                <td class="option secondary">Exterior Color:</td>
                                                <td class="spec">Ruby Red Metallic</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Interior Color:</td>
                                                <td class="spec">Marsala Red</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">MPG:</td>
                                                <td class="spec">16 city / 24 hwy</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Stock Number:</td>
                                                <td class="spec">590499</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">VIN Number:</td>
                                                <td class="spec">WP0AB2A74AL079264</td>
                                            </tr>
                                        </table>
                                        <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                        <div class="price"><b>Price:</b><br>
                                            <div class="figure">$94,995<br>
                                            </div>
                                            <div class="tax">Plus Sales Tax</div>
                                        </div>
                                        <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                        <div class="clearfix"></div>
                                    </a>
                                    <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                </div>
                                <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                    <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_7" />
                                    <label for="vehicle_7"></label>
                                    <a class="inventory" href="inventory-listing.html">
                                        <div class="title">2014 Porsche Cayenne GTS Sport Utility</div>
                                        <img src="http://demo.themesuite.com/automotive/images/car-7-200x150.jpg" class="preview" alt="preview">
                                        <table class="options-primary">
                                            <tr>
                                                <td class="option primary">Body Style:</td>
                                                <td class="spec">Sport Utility Vehicle</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Drivetrain:</td>
                                                <td class="spec">4WD</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Engine:</td>
                                                <td class="spec">4.8L V8 Turbo</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Transmission:</td>
                                                <td class="spec">8-Speed Automatic</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Mileage:</td>
                                                <td class="spec">7</td>
                                            </tr>
                                        </table>
                                        <table class="options-secondary">
                                            <tr>
                                                <td class="option secondary">Exterior Color:</td>
                                                <td class="spec">Peridot Metallic</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Interior Color:</td>
                                                <td class="spec">Alcantara Black</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">MPG:</td>
                                                <td class="spec">15 city / 21 hwy</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Stock Number:</td>
                                                <td class="spec">590512</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">VIN Number:</td>
                                                <td class="spec">WP1AD29P09LA73659</td>
                                            </tr>
                                        </table>
                                        <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                        <div class="price"><b>Price:</b><br>
                                            <div class="figure">$114,995<br>
                                            </div>
                                            <div class="tax">Plus Sales Tax</div>
                                        </div>
                                        <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                        <div class="clearfix"></div>
                                    </a>
                                    <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                </div>
                                <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                    <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_8" />
                                    <label for="vehicle_8"></label>
                                    <a class="inventory" href="inventory-listing.html">
                                        <div class="title">2014 Porsche GTS Panamera Executive Edition</div>
                                        <img src="http://demo.themesuite.com/automotive/images/car-8-200x150.jpg" class="preview" alt="preview">
                                        <table class="options-primary">
                                            <tr>
                                                <td class="option primary">Body Style:</td>
                                                <td class="spec">Sedan</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Drivetrain:</td>
                                                <td class="spec">RWD</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Engine:</td>
                                                <td class="spec">4.8L V8 Turbo</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Transmission:</td>
                                                <td class="spec">5-Speed Automatic</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Mileage:</td>
                                                <td class="spec">5</td>
                                            </tr>
                                        </table>
                                        <table class="options-secondary">
                                            <tr>
                                                <td class="option secondary">Exterior Color:</td>
                                                <td class="spec">Rhodium Silver Metallic</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Interior Color:</td>
                                                <td class="spec">Agate Grey</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">MPG:</td>
                                                <td class="spec">16 city / 24 hwy</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Stock Number:</td>
                                                <td class="spec">590524</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">VIN Number:</td>
                                                <td class="spec">WP0AB2A74AL092462</td>
                                            </tr>
                                        </table>
                                        <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                        <div class="price"><b>Price:</b><br>
                                            <div class="figure">$99,995<br>
                                            </div>
                                            <div class="tax">Plus Sales Tax</div>
                                        </div>
                                        <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                        <div class="clearfix"></div>
                                    </a>
                                    <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                </div>
                                <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                    <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_9" />
                                    <label for="vehicle_9"></label>
                                    <a class="inventory" href="inventory-listing.html">
                                        <div class="title">2009 Porsche Carrera 4S Turbo Convertible</div>
                                        <img src="http://demo.themesuite.com/automotive/images/car-9-200x150.jpg" class="preview" alt="preview">
                                        <table class="options-primary">
                                            <tr>
                                                <td class="option primary">Body Style:</td>
                                                <td class="spec">Convertible</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Drivetrain:</td>
                                                <td class="spec">AWD</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Engine:</td>
                                                <td class="spec">3.6L V6</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Transmission:</td>
                                                <td class="spec">6-Speed Manual</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Mileage:</td>
                                                <td class="spec">114,239</td>
                                            </tr>
                                        </table>
                                        <table class="options-secondary">
                                            <tr>
                                                <td class="option secondary">Exterior Color:</td>
                                                <td class="spec">Racing Yellow</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Interior Color:</td>
                                                <td class="spec">Midnight Black</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">MPG:</td>
                                                <td class="spec">19 city / 27 hwy</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Stock Number:</td>
                                                <td class="spec">590388</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">VIN Number:</td>
                                                <td class="spec">WP0CB2A92CS376450</td>
                                            </tr>
                                        </table>
                                        <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                        <div class="price"><b>Price:</b><br>
                                            <div class="figure">$39,995<br>
                                            </div>
                                            <div class="tax">Plus Sales Tax</div>
                                        </div>
                                        <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                        <div class="clearfix"></div>
                                    </a>
                                    <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="pagination margin-bottom-none margin-top-25">
                                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-pane fade" id="list-left-sidebar">
                        <div class="row">
                            <div class="inventory-wide-sidebar-left">
                                <div class=" col-md-9 col-sm-12 col-lg-push-3 col-md-push-3">
                                    <div class="sidebar car_listings margin-top-20 clearfix">
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle input-checkbox" id="vehicle_10" />
                                            <label for="vehicle_10"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2012 Porsche Cayenne GTS Sport Utility SUV</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-1-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Sport Utility Vehicle</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">4WD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">4.8L V8</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">8-Speed Tiptronic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">19,585</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Dark Blue Metallic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Black / Titanium Blue</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">15 city / 21 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590497</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP1AD29P09LA65818</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$102,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_11" />
                                            <label for="vehicle_11"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2009 Porsche Boxster Base Red Convertible</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-2-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Convertible</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">RWD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">2.9L Mid-Engine V6</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">5-Speed Manual</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">26,273</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Guards Red</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Platinum Grey</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">20 city / 30 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590271</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP0AB2A74AL060306</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$34,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_12" />
                                            <label for="vehicle_12"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2013 Porsche Panamera GTS Sedan</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-3-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Sedan</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">RWD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">4.8L V8</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">6-Speed Manual</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">32,304</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Chestnut Brown Metallic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Luxor Beige</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">16 city / 24 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590476</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP0AB2A74AL060306</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$82,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_13" />
                                            <label for="vehicle_13"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2010 Porsche Carrera 4S All-Wheel Drive</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-4-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Convertible</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">AWD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">3.8L V6</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">5-Speed Manual</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">21,900</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Aqua Blue Metallic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Platinum Grey</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">18 city / 26 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590421</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP0CA2A96AS740274</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$73,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_14" />
                                            <label for="vehicle_14"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2012 Porsche 911 Carrera S Convertible</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-5-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Convertible</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">RWD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">3.8L V6</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">6-Speed Automatic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">9,162</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">White</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Black</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">19 city / 27 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590435</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP0CB2A92CS754706</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$85,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_15" />
                                            <label for="vehicle_15"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2013 Porsche GTS Panamera Demonstrator</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-6-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Sedan</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">RWD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">4.8L V8</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">6-Speed Semi-Auto</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">3,914</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Ruby Red Metallic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Marsala Red</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">16 city / 24 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590499</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP0AB2A74AL079264</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$94,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_16" />
                                            <label for="vehicle_16"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2014 Porsche Cayenne GTS Sport Utility</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-7-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Sport Utility Vehicle</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">4WD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">4.8L V8 Turbo</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">8-Speed Automatic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">7</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Peridot Metallic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Alcantara Black</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">15 city / 21 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590512</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP1AD29P09LA73659</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$114,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_17" />
                                            <label for="vehicle_17"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2014 Porsche GTS Panamera Executive Edition</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-8-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Sedan</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">RWD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">4.8L V8 Turbo</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">5-Speed Automatic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">5</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Rhodium Silver Metallic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Agate Grey</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">16 city / 24 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590524</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP0AB2A74AL092462</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$99,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_18" />
                                            <label for="vehicle_18"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2009 Porsche Carrera 4S Turbo Convertible</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-9-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Convertible</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">AWD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">3.6L V6</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">6-Speed Manual</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">114,239</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Racing Yellow</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Midnight Black</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">19 city / 27 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590388</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP0CB2A92CS376450</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$39,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <ul class="pagination margin-bottom-none margin-top-25 md-margin-bottom-none xs-margin-bottom-60 sm-margin-bottom-60">
                                                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class=" col-md-3 col-sm-12 col-lg-pull-9 col-md-pull-9 left-sidebar">
                                    <div class="left_inventory">
                                        <h3 class="margin-bottom-25">SEARCH OUR INVENTORY</h3>
                                        <form class="clearfix select-form padding-bottom-50">
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="year" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Year</option>
                                                    <option>2015</option>
                                                    <option>2014</option>
                                                    <option>2013</option>
                                                    <option>2012</option>
                                                    <option>2011</option>
                                                    <option>2010</option>
                                                    <option>2009</option>
                                                    <option>2008</option>
                                                    <option>2007</option>
                                                    <option>2006</option>
                                                    <option>2005</option>
                                                    <option>2004</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="make" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Make</option>
                                                    <option>Lorem</option>
                                                    <option>ipsum</option>
                                                    <option>dolor</option>
                                                    <option>sit</option>
                                                    <option>amet</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="model" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Model</option>
                                                    <option>Lorem</option>
                                                    <option>ipsum</option>
                                                    <option>dolor</option>
                                                    <option>sit</option>
                                                    <option>amet</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="body_style" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Body Style</option>
                                                    <option>Cargo</option>
                                                    <option>Compact</option>
                                                    <option>Convertible</option>
                                                    <option>Coupe</option>
                                                    <option>Hatchback</option>
                                                    <option>Minivan</option>
                                                    <option>Sedan</option>
                                                    <option>SUV</option>
                                                    <option>Truck</option>
                                                    <option>Van</option>
                                                    <option>Wagon</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="mileage" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Mileage</option>
                                                    <option>0</option>
                                                    <option>&lt; 10,000</option>
                                                    <option>&lt; 20,000</option>
                                                    <option>&lt; 30,000</option>
                                                    <option>&lt; 40,000</option>
                                                    <option>&lt; 50,000</option>
                                                    <option>&lt; 60,000</option>
                                                    <option>&lt; 70,000</option>
                                                    <option>&lt; 80,000</option>
                                                    <option>&lt; 90,000</option>
                                                    <option>&lt; 100,000</option>
                                                    <option>&lt; 120,000</option>
                                                    <option>&lt; 150,000</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="transmission" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Transmission</option>
                                                    <option>Automatic</option>
                                                    <option>Manual</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="fuel_economy" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Fuel Economy</option>
                                                    <option>10-20 MPG</option>
                                                    <option>20-30 MPG</option>
                                                    <option>30-40 MPG</option>
                                                    <option>40-50 MPG</option>
                                                    <option>50-60 MPG</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="condition" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Condition</option>
                                                    <option>New</option>
                                                    <option>Used</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="location" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Location</option>
                                                    <option>Toronto</option>
                                                    <option>New York</option>
                                                    <option>Los Angeles</option>
                                                    <option>Vancouver</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="price" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Price</option>
                                                    <option>&lt; $1,000</option>
                                                    <option>&lt; $10,000</option>
                                                    <option>&lt; $20,000</option>
                                                    <option>&lt; $30,000</option>
                                                    <option>&lt; $40,000</option>
                                                    <option>&lt; $50,000</option>
                                                    <option>&lt; $60,000</option>
                                                    <option>&lt; $70,000</option>
                                                    <option>&lt; $80,000</option>
                                                    <option>&lt; $90,000</option>
                                                    <option>&lt; $100,000</option>
                                                </select>
                                            </div>
                                            <input type="reset" value="Reset Search Filters" class="pull-left btn-inventory margin-bottom-none md-button" />
                                        </form>
                                        <div class="side-content">
                                            <div class="list col-md-12 col-sm-3 padding-bottom-50">
                                                <h3 class="margin-bottom-25">YEAR</h3>
                                                <ul>
                                                    <li><a href="#"><span>2014 <strong>(28)</strong></span></a></li>
                                                    <li><a href="#"><span>2013 <strong>(172)</strong></span></a></li>
                                                    <li><a href="#"><span>2012 <strong>(102)</strong></span></a></li>
                                                    <li><a href="#"><span>2011 <strong>(98)</strong></span></a></li>
                                                    <li><a href="#"><span>2010 <strong>(91)</strong></span></a></li>
                                                    <li><a href="#"><span>2009 <strong>(27)</strong></span></a></li>
                                                    <li><a href="#"><span>2008 <strong>(25)</strong></span></a></li>
                                                    <li><a href="#"><span>2007 <strong>(15)</strong></span></a></li>
                                                    <li><a href="#"><span>2006 <strong>(9)</strong></span></a></li>
                                                    <li><a href="#"><span>2005 <strong>(3)</strong></span></a></li>
                                                    <li><a href="#">View More...</a></li>
                                                </ul>
                                            </div>
                                            <div class="list col-md-12 col-sm-3 padding-bottom-50">
                                                <h3 class="margin-bottom-25">MAKE</h3>
                                                <ul>
                                                    <li><a href="#"><span>Acura <strong>(2)</strong></span></a></li>
                                                    <li><a href="#"><span>BMW <strong>(4)</strong></span></a></li>
                                                    <li><a href="#"><span>Buick <strong>(1)</strong></span></a></li>
                                                    <li><a href="#"><span>Cadillac <strong>(6)</strong></span></a></li>
                                                    <li><a href="#"><span>Chevrolet <strong>(19)</strong></span></a></li>
                                                    <li><a href="#"><span>Chrysler <strong>(7)</strong></span></a></li>
                                                    <li><a href="#"><span>Dodge <strong>(14)</strong></span></a></li>
                                                    <li><a href="#"><span>Ford <strong>(15)</strong></span></a></li>
                                                    <li><a href="#"><span>GMC <strong>(9)</strong></span></a></li>
                                                    <li><a href="#"><span>Hummer <strong>(3)</strong></span></a></li>
                                                    <li><a href="#">View More...</a></li>
                                                </ul>
                                            </div>
                                            <div class="financing_calculator col-md-12 col-sm-6">
                                                <h3 class="margin-bottom-25">FINANCING CALCULATOR</h3>
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
                                                    <div class="dropdown_container">
                                                        <select class="frequency css-dropdowns">
                                                            <option value='0'>Bi-Weekly</option>
                                                            <option value='1'>Weekly</option>
                                                            <option value='2'>Monthly</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <a class="btn-inventory pull-right calculate">Calculate My Payment</a>
                                                <div class="clear"></div>
                                                <div class="table-responsive">
                                                    <table>
                                                        <tr>
                                                            <td><strong>NUMBER OF PAYMENTS:</strong></td>
                                                            <td><strong>60</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>PAYMENT AMOUNT:</strong></td>
                                                            <td><strong>$ 89.11</strong></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-right-sidebar">
                        <div class="row">
                            <div class="inventory-wide-sidebar-right">
                                <div class="col-md-9">
                                    <div class="sidebar car_listings margin-top-20 clearfix">
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle input-checkbox" id="vehicle_19" />
                                            <label for="vehicle_19"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2012 Porsche Cayenne GTS Sport Utility SUV</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-1-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Sport Utility Vehicle</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">4WD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">4.8L V8</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">8-Speed Tiptronic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">19,585</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Dark Blue Metallic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Black / Titanium Blue</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">15 city / 21 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590497</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP1AD29P09LA65818</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$102,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_20" />
                                            <label for="vehicle_20"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2009 Porsche Boxster Base Red Convertible</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-2-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Convertible</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">RWD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">2.9L Mid-Engine V6</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">5-Speed Manual</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">26,273</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Guards Red</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Platinum Grey</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">20 city / 30 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590271</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP0AB2A74AL060306</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$34,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_21" />
                                            <label for="vehicle_21"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2013 Porsche Panamera GTS Sedan</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-3-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Sedan</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">RWD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">4.8L V8</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">6-Speed Manual</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">32,304</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Chestnut Brown Metallic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Luxor Beige</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">16 city / 24 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590476</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP0AB2A74AL060306</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$82,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_22" />
                                            <label for="vehicle_22"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2010 Porsche Carrera 4S All-Wheel Drive</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-4-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Convertible</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">AWD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">3.8L V6</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">5-Speed Manual</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">21,900</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Aqua Blue Metallic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Platinum Grey</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">18 city / 26 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590421</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP0CA2A96AS740274</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$73,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_23" />
                                            <label for="vehicle_23"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2012 Porsche 911 Carrera S Convertible</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-5-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Convertible</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">RWD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">3.8L V6</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">6-Speed Automatic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">9,162</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">White</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Black</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">19 city / 27 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590435</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP0CB2A92CS754706</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$85,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_24" />
                                            <label for="vehicle_24"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2013 Porsche GTS Panamera Demonstrator</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-6-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Sedan</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">RWD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">4.8L V8</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">6-Speed Semi-Auto</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">3,914</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Ruby Red Metallic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Marsala Red</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">16 city / 24 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590499</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP0AB2A74AL079264</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$94,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_25" />
                                            <label for="vehicle_25"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2014 Porsche Cayenne GTS Sport Utility</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-7-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Sport Utility Vehicle</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">4WD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">4.8L V8 Turbo</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">8-Speed Automatic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">7</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Peridot Metallic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Alcantara Black</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">15 city / 21 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590512</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP1AD29P09LA73659</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$114,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_26" />
                                            <label for="vehicle_26"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2014 Porsche GTS Panamera Executive Edition</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-8-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Sedan</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">RWD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">4.8L V8 Turbo</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">5-Speed Automatic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">5</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Rhodium Silver Metallic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Agate Grey</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">16 city / 24 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590524</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP0AB2A74AL092462</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$99,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                            <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_27" />
                                            <label for="vehicle_27"></label>
                                            <a class="inventory" href="inventory-listing.html">
                                                <div class="title">2009 Porsche Carrera 4S Turbo Convertible</div>
                                                <img src="http://demo.themesuite.com/automotive/images/car-9-200x150.jpg" class="preview" alt="preview">
                                                <table class="options-primary">
                                                    <tr>
                                                        <td class="option primary">Body Style:</td>
                                                        <td class="spec">Convertible</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Drivetrain:</td>
                                                        <td class="spec">AWD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Engine:</td>
                                                        <td class="spec">3.6L V6</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Transmission:</td>
                                                        <td class="spec">6-Speed Manual</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option primary">Mileage:</td>
                                                        <td class="spec">114,239</td>
                                                    </tr>
                                                </table>
                                                <table class="options-secondary">
                                                    <tr>
                                                        <td class="option secondary">Exterior Color:</td>
                                                        <td class="spec">Racing Yellow</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Interior Color:</td>
                                                        <td class="spec">Midnight Black</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">MPG:</td>
                                                        <td class="spec">19 city / 27 hwy</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">Stock Number:</td>
                                                        <td class="spec">590388</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="option secondary">VIN Number:</td>
                                                        <td class="spec">WP0CB2A92CS376450</td>
                                                    </tr>
                                                </table>
                                                <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                <div class="price"><b>Price:</b><br>
                                                    <div class="figure">$39,995<br>
                                                    </div>
                                                    <div class="tax">Plus Sales Tax</div>
                                                </div>
                                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <ul class="pagination margin-bottom-none margin-top-25 md-margin-bottom-none xs-margin-bottom-60 sm-margin-bottom-60">
                                                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="inventory-sidebar col-md-3">
                                    <div class="left_inventory">
                                        <h3 class="margin-bottom-25">SEARCH OUR INVENTORY</h3>
                                        <form class="clearfix select-form padding-bottom-50">
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="year" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Year</option>
                                                    <option>2015</option>
                                                    <option>2014</option>
                                                    <option>2013</option>
                                                    <option>2012</option>
                                                    <option>2011</option>
                                                    <option>2010</option>
                                                    <option>2009</option>
                                                    <option>2008</option>
                                                    <option>2007</option>
                                                    <option>2006</option>
                                                    <option>2005</option>
                                                    <option>2004</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="make" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Make</option>
                                                    <option>Lorem</option>
                                                    <option>ipsum</option>
                                                    <option>dolor</option>
                                                    <option>sit</option>
                                                    <option>amet</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="model" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Model</option>
                                                    <option>Lorem</option>
                                                    <option>ipsum</option>
                                                    <option>dolor</option>
                                                    <option>sit</option>
                                                    <option>amet</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="body_style" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Body Style</option>
                                                    <option>Cargo</option>
                                                    <option>Compact</option>
                                                    <option>Convertible</option>
                                                    <option>Coupe</option>
                                                    <option>Hatchback</option>
                                                    <option>Minivan</option>
                                                    <option>Sedan</option>
                                                    <option>SUV</option>
                                                    <option>Truck</option>
                                                    <option>Van</option>
                                                    <option>Wagon</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="mileage" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Mileage</option>
                                                    <option>0</option>
                                                    <option>&lt; 10,000</option>
                                                    <option>&lt; 20,000</option>
                                                    <option>&lt; 30,000</option>
                                                    <option>&lt; 40,000</option>
                                                    <option>&lt; 50,000</option>
                                                    <option>&lt; 60,000</option>
                                                    <option>&lt; 70,000</option>
                                                    <option>&lt; 80,000</option>
                                                    <option>&lt; 90,000</option>
                                                    <option>&lt; 100,000</option>
                                                    <option>&lt; 120,000</option>
                                                    <option>&lt; 150,000</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="transmission" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Transmission</option>
                                                    <option>Automatic</option>
                                                    <option>Manual</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="fuel_economy" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Fuel Economy</option>
                                                    <option>10-20 MPG</option>
                                                    <option>20-30 MPG</option>
                                                    <option>30-40 MPG</option>
                                                    <option>40-50 MPG</option>
                                                    <option>50-60 MPG</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="condition" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Condition</option>
                                                    <option>New</option>
                                                    <option>Used</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="location" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Location</option>
                                                    <option>Toronto</option>
                                                    <option>New York</option>
                                                    <option>Los Angeles</option>
                                                    <option>Vancouver</option>
                                                </select>
                                            </div>
                                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                                <select name="price" class="css-dropdowns" tabindex="1" >
                                                    <option value="">Search by Price</option>
                                                    <option>&lt; $1,000</option>
                                                    <option>&lt; $10,000</option>
                                                    <option>&lt; $20,000</option>
                                                    <option>&lt; $30,000</option>
                                                    <option>&lt; $40,000</option>
                                                    <option>&lt; $50,000</option>
                                                    <option>&lt; $60,000</option>
                                                    <option>&lt; $70,000</option>
                                                    <option>&lt; $80,000</option>
                                                    <option>&lt; $90,000</option>
                                                    <option>&lt; $100,000</option>
                                                </select>
                                            </div>
                                            <input type="reset" value="Reset Search Filters" class="pull-left btn-inventory margin-bottom-none md-button" />
                                        </form>
                                        <div class="side-content">
                                            <div class="list col-lg-12 col-md-12 col-sm-3 padding-bottom-50">
                                                <h3 class="margin-bottom-25">YEAR</h3>
                                                <ul>
                                                    <li><a href="#"><span>2014 <strong>(28)</strong></span></a></li>
                                                    <li><a href="#"><span>2013 <strong>(172)</strong></span></a></li>
                                                    <li><a href="#"><span>2012 <strong>(102)</strong></span></a></li>
                                                    <li><a href="#"><span>2011 <strong>(98)</strong></span></a></li>
                                                    <li><a href="#"><span>2010 <strong>(91)</strong></span></a></li>
                                                    <li><a href="#"><span>2009 <strong>(27)</strong></span></a></li>
                                                    <li><a href="#"><span>2008 <strong>(25)</strong></span></a></li>
                                                    <li><a href="#"><span>2007 <strong>(15)</strong></span></a></li>
                                                    <li><a href="#"><span>2006 <strong>(9)</strong></span></a></li>
                                                    <li><a href="#"><span>2005 <strong>(3)</strong></span></a></li>
                                                    <li><a href="#">View More...</a></li>
                                                </ul>
                                            </div>
                                            <div class="list col-lg-12 col-md-12 col-sm-3 padding-bottom-50">
                                                <h3 class="margin-bottom-25">MAKE</h3>
                                                <ul>
                                                    <li><a href="#"><span>Acura <strong>(2)</strong></span></a></li>
                                                    <li><a href="#"><span>BMW <strong>(4)</strong></span></a></li>
                                                    <li><a href="#"><span>Buick <strong>(1)</strong></span></a></li>
                                                    <li><a href="#"><span>Cadillac <strong>(6)</strong></span></a></li>
                                                    <li><a href="#"><span>Chevrolet <strong>(19)</strong></span></a></li>
                                                    <li><a href="#"><span>Chrysler <strong>(7)</strong></span></a></li>
                                                    <li><a href="#"><span>Dodge <strong>(14)</strong></span></a></li>
                                                    <li><a href="#"><span>Ford <strong>(15)</strong></span></a></li>
                                                    <li><a href="#"><span>GMC <strong>(9)</strong></span></a></li>
                                                    <li><a href="#"><span>Hummer <strong>(3)</strong></span></a></li>
                                                    <li><a href="#">View More...</a></li>
                                                </ul>
                                            </div>
                                            <div class="financing_calculator col-lg-12 col-md-12 col-sm-6">
                                                <h3 class="margin-bottom-25">FINANCING CALCULATOR</h3>
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
                                                    <div class="dropdown_container">
                                                        <select class="frequency css-dropdowns">
                                                            <option value='0'>Bi-Weekly</option>
                                                            <option value='1'>Weekly</option>
                                                            <option value='2'>Monthly</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <a class="btn-inventory pull-right calculate">Calculate My Payment</a>
                                                <div class="clear"></div>
                                                <div class="table-responsive">
                                                    <table>
                                                        <tr>
                                                            <td><strong>NUMBER OF PAYMENTS:</strong></td>
                                                            <td><strong>60</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>PAYMENT AMOUNT:</strong></td>
                                                            <td><strong>$ 89.11</strong></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="box-full-width">
                        <div class="inventory_box car_listings boxed boxed_full">
                            <div class="vehicle_demo clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                        <input type="checkbox" name="a" class="checkbox compare_vehicle input-checkbox" id="vehicle_28" />
                                        <label for="vehicle_28"></label>
                                        <a class="inventory" href="inventory-listing.html">
                                            <div class="title">2012 Porsche Cayenne GTS Sport Utility SUV</div>
                                            <img src="http://demo.themesuite.com/automotive/images/car-1-200x150.jpg" class="preview" alt="preview">
                                            <table class="options-primary">
                                                <tr>
                                                    <td class="option primary">Body Style:</td>
                                                    <td class="spec">Sport Utility Vehicle</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Drivetrain:</td>
                                                    <td class="spec">4WD</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Engine:</td>
                                                    <td class="spec">4.8L V8</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Transmission:</td>
                                                    <td class="spec">8-Speed Tiptronic</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Mileage:</td>
                                                    <td class="spec">19,585</td>
                                                </tr>
                                            </table>
                                            <table class="options-secondary">
                                                <tr>
                                                    <td class="option secondary">Exterior Color:</td>
                                                    <td class="spec">Dark Blue Metallic</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Interior Color:</td>
                                                    <td class="spec">Black / Titanium Blue</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">MPG:</td>
                                                    <td class="spec">15 city / 21 hwy</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Stock Number:</td>
                                                    <td class="spec">590497</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">VIN Number:</td>
                                                    <td class="spec">WP1AD29P09LA65818</td>
                                                </tr>
                                            </table>
                                            <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                            <div class="price"><b>Price:</b><br>
                                                <div class="figure">$102,995<br>
                                                </div>
                                                <div class="tax">Plus Sales Tax</div>
                                            </div>
                                            <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                        <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_29" />
                                        <label for="vehicle_29"></label>
                                        <a class="inventory" href="inventory-listing.html">
                                            <div class="title">2009 Porsche Boxster Base Red Convertible</div>
                                            <img src="http://demo.themesuite.com/automotive/images/car-2-200x150.jpg" class="preview" alt="preview">
                                            <table class="options-primary">
                                                <tr>
                                                    <td class="option primary">Body Style:</td>
                                                    <td class="spec">Convertible</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Drivetrain:</td>
                                                    <td class="spec">RWD</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Engine:</td>
                                                    <td class="spec">2.9L Mid-Engine V6</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Transmission:</td>
                                                    <td class="spec">5-Speed Manual</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Mileage:</td>
                                                    <td class="spec">26,273</td>
                                                </tr>
                                            </table>
                                            <table class="options-secondary">
                                                <tr>
                                                    <td class="option secondary">Exterior Color:</td>
                                                    <td class="spec">Guards Red</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Interior Color:</td>
                                                    <td class="spec">Platinum Grey</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">MPG:</td>
                                                    <td class="spec">20 city / 30 hwy</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Stock Number:</td>
                                                    <td class="spec">590271</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">VIN Number:</td>
                                                    <td class="spec">WP0AB2A74AL060306</td>
                                                </tr>
                                            </table>
                                            <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                            <div class="price"><b>Price:</b><br>
                                                <div class="figure">$34,995<br>
                                                </div>
                                                <div class="tax">Plus Sales Tax</div>
                                            </div>
                                            <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                        <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_30" />
                                        <label for="vehicle_30"></label>
                                        <a class="inventory" href="inventory-listing.html">
                                            <div class="title">2013 Porsche Panamera GTS Sedan</div>
                                            <img src="http://demo.themesuite.com/automotive/images/car-3-200x150.jpg" class="preview" alt="preview">
                                            <table class="options-primary">
                                                <tr>
                                                    <td class="option primary">Body Style:</td>
                                                    <td class="spec">Sedan</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Drivetrain:</td>
                                                    <td class="spec">RWD</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Engine:</td>
                                                    <td class="spec">4.8L V8</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Transmission:</td>
                                                    <td class="spec">6-Speed Manual</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Mileage:</td>
                                                    <td class="spec">32,304</td>
                                                </tr>
                                            </table>
                                            <table class="options-secondary">
                                                <tr>
                                                    <td class="option secondary">Exterior Color:</td>
                                                    <td class="spec">Chestnut Brown Metallic</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Interior Color:</td>
                                                    <td class="spec">Luxor Beige</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">MPG:</td>
                                                    <td class="spec">16 city / 24 hwy</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Stock Number:</td>
                                                    <td class="spec">590476</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">VIN Number:</td>
                                                    <td class="spec">WP0AB2A74AL060306</td>
                                                </tr>
                                            </table>
                                            <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                            <div class="price"><b>Price:</b><br>
                                                <div class="figure">$82,995<br>
                                                </div>
                                                <div class="tax">Plus Sales Tax</div>
                                            </div>
                                            <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                        <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_31" />
                                        <label for="vehicle_31"></label>
                                        <a class="inventory" href="inventory-listing.html">
                                            <div class="title">2010 Porsche Carrera 4S All-Wheel Drive</div>
                                            <img src="http://demo.themesuite.com/automotive/images/car-4-200x150.jpg" class="preview" alt="preview">
                                            <table class="options-primary">
                                                <tr>
                                                    <td class="option primary">Body Style:</td>
                                                    <td class="spec">Convertible</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Drivetrain:</td>
                                                    <td class="spec">AWD</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Engine:</td>
                                                    <td class="spec">3.8L V6</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Transmission:</td>
                                                    <td class="spec">5-Speed Manual</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Mileage:</td>
                                                    <td class="spec">21,900</td>
                                                </tr>
                                            </table>
                                            <table class="options-secondary">
                                                <tr>
                                                    <td class="option secondary">Exterior Color:</td>
                                                    <td class="spec">Aqua Blue Metallic</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Interior Color:</td>
                                                    <td class="spec">Platinum Grey</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">MPG:</td>
                                                    <td class="spec">18 city / 26 hwy</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Stock Number:</td>
                                                    <td class="spec">590421</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">VIN Number:</td>
                                                    <td class="spec">WP0CA2A96AS740274</td>
                                                </tr>
                                            </table>
                                            <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                            <div class="price"><b>Price:</b><br>
                                                <div class="figure">$73,995<br>
                                                </div>
                                                <div class="tax">Plus Sales Tax</div>
                                            </div>
                                            <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                        <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_32" />
                                        <label for="vehicle_32"></label>
                                        <a class="inventory" href="inventory-listing.html">
                                            <div class="title">2012 Porsche 911 Carrera S Convertible</div>
                                            <img src="http://demo.themesuite.com/automotive/images/car-5-200x150.jpg" class="preview" alt="preview">
                                            <table class="options-primary">
                                                <tr>
                                                    <td class="option primary">Body Style:</td>
                                                    <td class="spec">Convertible</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Drivetrain:</td>
                                                    <td class="spec">RWD</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Engine:</td>
                                                    <td class="spec">3.8L V6</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Transmission:</td>
                                                    <td class="spec">6-Speed Automatic</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Mileage:</td>
                                                    <td class="spec">9,162</td>
                                                </tr>
                                            </table>
                                            <table class="options-secondary">
                                                <tr>
                                                    <td class="option secondary">Exterior Color:</td>
                                                    <td class="spec">White</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Interior Color:</td>
                                                    <td class="spec">Black</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">MPG:</td>
                                                    <td class="spec">19 city / 27 hwy</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Stock Number:</td>
                                                    <td class="spec">590435</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">VIN Number:</td>
                                                    <td class="spec">WP0CB2A92CS754706</td>
                                                </tr>
                                            </table>
                                            <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                            <div class="price"><b>Price:</b><br>
                                                <div class="figure">$85,995<br>
                                                </div>
                                                <div class="tax">Plus Sales Tax</div>
                                            </div>
                                            <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                        <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_33" />
                                        <label for="vehicle_33"></label>
                                        <a class="inventory" href="inventory-listing.html">
                                            <div class="title">2013 Porsche GTS Panamera Demonstrator</div>
                                            <img src="http://demo.themesuite.com/automotive/images/car-6-200x150.jpg" class="preview" alt="preview">
                                            <table class="options-primary">
                                                <tr>
                                                    <td class="option primary">Body Style:</td>
                                                    <td class="spec">Sedan</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Drivetrain:</td>
                                                    <td class="spec">RWD</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Engine:</td>
                                                    <td class="spec">4.8L V8</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Transmission:</td>
                                                    <td class="spec">6-Speed Semi-Auto</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Mileage:</td>
                                                    <td class="spec">3,914</td>
                                                </tr>
                                            </table>
                                            <table class="options-secondary">
                                                <tr>
                                                    <td class="option secondary">Exterior Color:</td>
                                                    <td class="spec">Ruby Red Metallic</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Interior Color:</td>
                                                    <td class="spec">Marsala Red</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">MPG:</td>
                                                    <td class="spec">16 city / 24 hwy</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Stock Number:</td>
                                                    <td class="spec">590499</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">VIN Number:</td>
                                                    <td class="spec">WP0AB2A74AL079264</td>
                                                </tr>
                                            </table>
                                            <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                            <div class="price"><b>Price:</b><br>
                                                <div class="figure">$94,995<br>
                                                </div>
                                                <div class="tax">Plus Sales Tax</div>
                                            </div>
                                            <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                        <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_34" />
                                        <label for="vehicle_34"></label>
                                        <a class="inventory" href="inventory-listing.html">
                                            <div class="title">2014 Porsche Cayenne GTS Sport Utility</div>
                                            <img src="http://demo.themesuite.com/automotive/images/car-7-200x150.jpg" class="preview" alt="preview">
                                            <table class="options-primary">
                                                <tr>
                                                    <td class="option primary">Body Style:</td>
                                                    <td class="spec">Sport Utility Vehicle</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Drivetrain:</td>
                                                    <td class="spec">4WD</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Engine:</td>
                                                    <td class="spec">4.8L V8 Turbo</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Transmission:</td>
                                                    <td class="spec">8-Speed Automatic</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Mileage:</td>
                                                    <td class="spec">7</td>
                                                </tr>
                                            </table>
                                            <table class="options-secondary">
                                                <tr>
                                                    <td class="option secondary">Exterior Color:</td>
                                                    <td class="spec">Peridot Metallic</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Interior Color:</td>
                                                    <td class="spec">Alcantara Black</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">MPG:</td>
                                                    <td class="spec">15 city / 21 hwy</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Stock Number:</td>
                                                    <td class="spec">590512</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">VIN Number:</td>
                                                    <td class="spec">WP1AD29P09LA73659</td>
                                                </tr>
                                            </table>
                                            <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                            <div class="price"><b>Price:</b><br>
                                                <div class="figure">$114,995<br>
                                                </div>
                                                <div class="tax">Plus Sales Tax</div>
                                            </div>
                                            <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                        <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_35" />
                                        <label for="vehicle_35"></label>
                                        <a class="inventory" href="inventory-listing.html">
                                            <div class="title">2014 Porsche GTS Panamera Executive Edition</div>
                                            <img src="http://demo.themesuite.com/automotive/images/car-8-200x150.jpg" class="preview" alt="preview">
                                            <table class="options-primary">
                                                <tr>
                                                    <td class="option primary">Body Style:</td>
                                                    <td class="spec">Sedan</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Drivetrain:</td>
                                                    <td class="spec">RWD</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Engine:</td>
                                                    <td class="spec">4.8L V8 Turbo</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Transmission:</td>
                                                    <td class="spec">5-Speed Automatic</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Mileage:</td>
                                                    <td class="spec">5</td>
                                                </tr>
                                            </table>
                                            <table class="options-secondary">
                                                <tr>
                                                    <td class="option secondary">Exterior Color:</td>
                                                    <td class="spec">Rhodium Silver Metallic</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Interior Color:</td>
                                                    <td class="spec">Agate Grey</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">MPG:</td>
                                                    <td class="spec">16 city / 24 hwy</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Stock Number:</td>
                                                    <td class="spec">590524</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">VIN Number:</td>
                                                    <td class="spec">WP0AB2A74AL092462</td>
                                                </tr>
                                            </table>
                                            <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                            <div class="price"><b>Price:</b><br>
                                                <div class="figure">$99,995<br>
                                                </div>
                                                <div class="tax">Plus Sales Tax</div>
                                            </div>
                                            <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                        <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_36" />
                                        <label for="vehicle_36"></label>
                                        <a class="inventory" href="inventory-listing.html">
                                            <div class="title">2009 Porsche Carrera 4S Turbo Convertible</div>
                                            <img src="http://demo.themesuite.com/automotive/images/car-9-200x150.jpg" class="preview" alt="preview">
                                            <table class="options-primary">
                                                <tr>
                                                    <td class="option primary">Body Style:</td>
                                                    <td class="spec">Convertible</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Drivetrain:</td>
                                                    <td class="spec">AWD</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Engine:</td>
                                                    <td class="spec">3.6L V6</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Transmission:</td>
                                                    <td class="spec">6-Speed Manual</td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Mileage:</td>
                                                    <td class="spec">114,239</td>
                                                </tr>
                                            </table>
                                            <table class="options-secondary">
                                                <tr>
                                                    <td class="option secondary">Exterior Color:</td>
                                                    <td class="spec">Racing Yellow</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Interior Color:</td>
                                                    <td class="spec">Midnight Black</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">MPG:</td>
                                                    <td class="spec">19 city / 27 hwy</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">Stock Number:</td>
                                                    <td class="spec">590388</td>
                                                </tr>
                                                <tr>
                                                    <td class="option secondary">VIN Number:</td>
                                                    <td class="spec">WP0CB2A92CS376450</td>
                                                </tr>
                                            </table>
                                            <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                            <div class="price"><b>Price:</b><br>
                                                <div class="figure">$39,995<br>
                                                </div>
                                                <div class="tax">Plus Sales Tax</div>
                                            </div>
                                            <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                    </div>
                                </div>
                            </div>
                            <div class="inventory_pagination">
                                <ul class="pagination margin-bottom-none margin-top-25">
                                    <li class="disabled"><a href="#" class="disabled"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="left-box-fullwidth">
                        <div class="row">
                            <div class="car_listings boxed boxed_left col-md-9 col-lg-push-3 col-md-push-3">
                                <div class="inventory_box">
                                    <div class="row clearfix">
                                        <div class="clearfix"></div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle input-checkbox" id="vehicle_37" />
                                                <label for="vehicle_37"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2012 Porsche Cayenne GTS Sport Utility SUV</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-1-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Sport Utility Vehicle</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">4WD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">4.8L V8</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">8-Speed Tiptronic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">19,585</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Dark Blue Metallic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Black / Titanium Blue</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">15 city / 21 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590497</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP1AD29P09LA65818</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$102,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_38" />
                                                <label for="vehicle_38"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2009 Porsche Boxster Base Red Convertible</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-2-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Convertible</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">RWD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">2.9L Mid-Engine V6</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">5-Speed Manual</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">26,273</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Guards Red</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Platinum Grey</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">20 city / 30 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590271</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP0AB2A74AL060306</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$34,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_39" />
                                                <label for="vehicle_39"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2013 Porsche Panamera GTS Sedan</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-3-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Sedan</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">RWD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">4.8L V8</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">6-Speed Manual</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">32,304</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Chestnut Brown Metallic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Luxor Beige</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">16 city / 24 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590476</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP0AB2A74AL060306</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$82,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_40" />
                                                <label for="vehicle_40"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2010 Porsche Carrera 4S All-Wheel Drive</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-4-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Convertible</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">AWD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">3.8L V6</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">5-Speed Manual</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">21,900</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Aqua Blue Metallic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Platinum Grey</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">18 city / 26 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590421</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP0CA2A96AS740274</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$73,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_41" />
                                                <label for="vehicle_41"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2012 Porsche 911 Carrera S Convertible</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-5-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Convertible</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">RWD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">3.8L V6</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">6-Speed Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">9,162</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">White</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Black</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">19 city / 27 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590435</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP0CB2A92CS754706</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$85,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_42" />
                                                <label for="vehicle_42"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2013 Porsche GTS Panamera Demonstrator</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-6-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Sedan</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">RWD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">4.8L V8</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">6-Speed Semi-Auto</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">3,914</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Ruby Red Metallic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Marsala Red</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">16 city / 24 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590499</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP0AB2A74AL079264</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$94,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_43" />
                                                <label for="vehicle_43"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2014 Porsche Cayenne GTS Sport Utility</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-7-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Sport Utility Vehicle</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">4WD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">4.8L V8 Turbo</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">8-Speed Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">7</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Peridot Metallic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Alcantara Black</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">15 city / 21 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590512</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP1AD29P09LA73659</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$114,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_44" />
                                                <label for="vehicle_44"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2014 Porsche GTS Panamera Executive Edition</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-8-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Sedan</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">RWD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">4.8L V8 Turbo</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">5-Speed Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">5</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Rhodium Silver Metallic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Agate Grey</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">16 city / 24 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590524</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP0AB2A74AL092462</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$99,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_45" />
                                                <label for="vehicle_45"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2009 Porsche Carrera 4S Turbo Convertible</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-9-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Convertible</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">AWD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">3.6L V6</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">6-Speed Manual</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">114,239</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Racing Yellow</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Midnight Black</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">19 city / 27 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590388</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP0CB2A92CS376450</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$39,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="inventory_pagination md-margin-bottom-none xs-margin-bottom-60 sm-margin-bottom-60">
                                    <ul class="pagination margin-bottom-none margin-top-25">
                                        <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="inventory-sidebar col-md-3 col-sm-12 col-lg-pull-9 col-md-pull-9 left-sidebar">
                                <div class="left_inventory">
                                    <h3 class="margin-bottom-25">SEARCH OUR INVENTORY</h3>
                                    <form class="clearfix select-form padding-bottom-50">
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="year" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Year</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                                <option>2013</option>
                                                <option>2012</option>
                                                <option>2011</option>
                                                <option>2010</option>
                                                <option>2009</option>
                                                <option>2008</option>
                                                <option>2007</option>
                                                <option>2006</option>
                                                <option>2005</option>
                                                <option>2004</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="make" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Make</option>
                                                <option>Lorem</option>
                                                <option>ipsum</option>
                                                <option>dolor</option>
                                                <option>sit</option>
                                                <option>amet</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="model" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Model</option>
                                                <option>Lorem</option>
                                                <option>ipsum</option>
                                                <option>dolor</option>
                                                <option>sit</option>
                                                <option>amet</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="body_style" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Body Style</option>
                                                <option>Cargo</option>
                                                <option>Compact</option>
                                                <option>Convertible</option>
                                                <option>Coupe</option>
                                                <option>Hatchback</option>
                                                <option>Minivan</option>
                                                <option>Sedan</option>
                                                <option>SUV</option>
                                                <option>Truck</option>
                                                <option>Van</option>
                                                <option>Wagon</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="mileage" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Mileage</option>
                                                <option>0</option>
                                                <option>&lt; 10,000</option>
                                                <option>&lt; 20,000</option>
                                                <option>&lt; 30,000</option>
                                                <option>&lt; 40,000</option>
                                                <option>&lt; 50,000</option>
                                                <option>&lt; 60,000</option>
                                                <option>&lt; 70,000</option>
                                                <option>&lt; 80,000</option>
                                                <option>&lt; 90,000</option>
                                                <option>&lt; 100,000</option>
                                                <option>&lt; 120,000</option>
                                                <option>&lt; 150,000</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="transmission" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Transmission</option>
                                                <option>Automatic</option>
                                                <option>Manual</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="fuel_economy" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Fuel Economy</option>
                                                <option>10-20 MPG</option>
                                                <option>20-30 MPG</option>
                                                <option>30-40 MPG</option>
                                                <option>40-50 MPG</option>
                                                <option>50-60 MPG</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="condition" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Condition</option>
                                                <option>New</option>
                                                <option>Used</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="location" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Location</option>
                                                <option>Toronto</option>
                                                <option>New York</option>
                                                <option>Los Angeles</option>
                                                <option>Vancouver</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="price" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Price</option>
                                                <option>&lt; $1,000</option>
                                                <option>&lt; $10,000</option>
                                                <option>&lt; $20,000</option>
                                                <option>&lt; $30,000</option>
                                                <option>&lt; $40,000</option>
                                                <option>&lt; $50,000</option>
                                                <option>&lt; $60,000</option>
                                                <option>&lt; $70,000</option>
                                                <option>&lt; $80,000</option>
                                                <option>&lt; $90,000</option>
                                                <option>&lt; $100,000</option>
                                            </select>
                                        </div>
                                        <input type="reset" value="Reset Search Filters" class="pull-left btn-inventory margin-bottom-none md-button" />
                                    </form>
                                    <div class="side-content">
                                        <div class="list col-md-12 col-sm-3 padding-bottom-50">
                                            <h3 class="margin-bottom-25">YEAR</h3>
                                            <ul>
                                                <li><span>2014 <strong>(28)</strong></span></li>
                                                <li><span>2013 <strong>(172)</strong></span></li>
                                                <li><span>2012 <strong>(102)</strong></span></li>
                                                <li><span>2011 <strong>(98)</strong></span></li>
                                                <li><span>2010 <strong>(91)</strong></span></li>
                                                <li><span>2009 <strong>(27)</strong></span></li>
                                                <li><span>2008 <strong>(25)</strong></span></li>
                                                <li><span>2007 <strong>(15)</strong></span></li>
                                                <li><span>2006 <strong>(9)</strong></span></li>
                                                <li><span>2005 <strong>(3)</strong></span></li>
                                                <li><a href="#">View More...</a></li>
                                            </ul>
                                        </div>
                                        <div class="list col-md-12 col-sm-3 padding-bottom-50">
                                            <h3 class="margin-bottom-25">MAKE</h3>
                                            <ul>
                                                <li><span>Acura <strong>(2)</strong></span></li>
                                                <li><span>BMW <strong>(4)</strong></span></li>
                                                <li><span>Buick <strong>(1)</strong></span></li>
                                                <li><span>Cadillac <strong>(6)</strong></span></li>
                                                <li><span>Chevrolet <strong>(19)</strong></span></li>
                                                <li><span>Chrysler <strong>(7)</strong></span></li>
                                                <li><span>Dodge <strong>(14)</strong></span></li>
                                                <li><span>Ford <strong>(15)</strong></span></li>
                                                <li><span>GMC <strong>(9)</strong></span></li>
                                                <li><span>Hummer <strong>(3)</strong></span></li>
                                                <li><a href="#">View More...</a></li>
                                            </ul>
                                        </div>
                                        <div class="financing_calculator col-md-12 col-sm-6">
                                            <h3 class="margin-bottom-25">FINANCING CALCULATOR</h3>
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
                                                <div class="dropdown_container">
                                                    <select class="frequency css-dropdowns">
                                                        <option value='0'>Bi-Weekly</option>
                                                        <option value='1'>Weekly</option>
                                                        <option value='2'>Monthly</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <a class="btn-inventory pull-right calculate">Calculate My Payment</a>
                                            <div class="clear"></div>
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
                    <div class="tab-pane fade" id="right-box-fullwidth">
                        <div class="row">
                            <div class="car_listings boxed boxed_right col-md-9">
                                <div class="inventory_box">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle input-checkbox" id="vehicle_46" />
                                                <label for="vehicle_46"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2012 Porsche Cayenne GTS Sport Utility SUV</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-1-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Sport Utility Vehicle</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">4WD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">4.8L V8</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">8-Speed Tiptronic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">19,585</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Dark Blue Metallic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Black / Titanium Blue</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">15 city / 21 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590497</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP1AD29P09LA65818</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$102,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_47" />
                                                <label for="vehicle_47"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2009 Porsche Boxster Base Red Convertible</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-2-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Convertible</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">RWD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">2.9L Mid-Engine V6</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">5-Speed Manual</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">26,273</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Guards Red</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Platinum Grey</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">20 city / 30 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590271</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP0AB2A74AL060306</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$34,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_48" />
                                                <label for="vehicle_48"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2013 Porsche Panamera GTS Sedan</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-3-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Sedan</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">RWD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">4.8L V8</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">6-Speed Manual</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">32,304</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Chestnut Brown Metallic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Luxor Beige</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">16 city / 24 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590476</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP0AB2A74AL060306</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$82,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_49" />
                                                <label for="vehicle_49"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2010 Porsche Carrera 4S All-Wheel Drive</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-4-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Convertible</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">AWD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">3.8L V6</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">5-Speed Manual</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">21,900</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Aqua Blue Metallic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Platinum Grey</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">18 city / 26 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590421</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP0CA2A96AS740274</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$73,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_50" />
                                                <label for="vehicle_50"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2012 Porsche 911 Carrera S Convertible</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-5-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Convertible</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">RWD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">3.8L V6</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">6-Speed Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">9,162</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">White</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Black</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">19 city / 27 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590435</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP0CB2A92CS754706</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$85,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_51" />
                                                <label for="vehicle_51"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2013 Porsche GTS Panamera Demonstrator</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-6-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Sedan</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">RWD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">4.8L V8</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">6-Speed Semi-Auto</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">3,914</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Ruby Red Metallic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Marsala Red</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">16 city / 24 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590499</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP0AB2A74AL079264</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$94,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_52" />
                                                <label for="vehicle_52"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2014 Porsche Cayenne GTS Sport Utility</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-7-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Sport Utility Vehicle</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">4WD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">4.8L V8 Turbo</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">8-Speed Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">7</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Peridot Metallic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Alcantara Black</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">15 city / 21 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590512</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP1AD29P09LA73659</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$114,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_53" />
                                                <label for="vehicle_53"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2014 Porsche GTS Panamera Executive Edition</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-8-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Sedan</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">RWD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">4.8L V8 Turbo</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">5-Speed Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">5</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Rhodium Silver Metallic</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Agate Grey</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">16 city / 24 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590524</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP0AB2A74AL092462</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$99,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_54" />
                                                <label for="vehicle_54"></label>
                                                <a class="inventory" href="inventory-listing.html">
                                                    <div class="title">2009 Porsche Carrera 4S Turbo Convertible</div>
                                                    <img src="http://demo.themesuite.com/automotive/images/car-9-200x150.jpg" class="preview" alt="preview">
                                                    <table class="options-primary">
                                                        <tr>
                                                            <td class="option primary">Body Style:</td>
                                                            <td class="spec">Convertible</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Drivetrain:</td>
                                                            <td class="spec">AWD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Engine:</td>
                                                            <td class="spec">3.6L V6</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Transmission:</td>
                                                            <td class="spec">6-Speed Manual</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option primary">Mileage:</td>
                                                            <td class="spec">114,239</td>
                                                        </tr>
                                                    </table>
                                                    <table class="options-secondary">
                                                        <tr>
                                                            <td class="option secondary">Exterior Color:</td>
                                                            <td class="spec">Racing Yellow</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Interior Color:</td>
                                                            <td class="spec">Midnight Black</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">MPG:</td>
                                                            <td class="spec">19 city / 27 hwy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">Stock Number:</td>
                                                            <td class="spec">590388</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="option secondary">VIN Number:</td>
                                                            <td class="spec">WP0CB2A92CS376450</td>
                                                        </tr>
                                                    </table>
                                                    <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                                                    <div class="price"><b>Price:</b><br>
                                                        <div class="figure">$39,995<br>
                                                        </div>
                                                        <div class="tax">Plus Sales Tax</div>
                                                    </div>
                                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="inventory_pagination md-margin-bottom-none xs-margin-bottom-60 sm-margin-bottom-60">
                                    <ul class="pagination margin-bottom-none margin-top-25">
                                        <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="inventory-sidebar col-md-3">
                                <div class="left_inventory">
                                    <h3 class="margin-bottom-25">SEARCH OUR INVENTORY</h3>
                                    <form class="clearfix select-form padding-bottom-50">
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="year" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Year</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                                <option>2013</option>
                                                <option>2012</option>
                                                <option>2011</option>
                                                <option>2010</option>
                                                <option>2009</option>
                                                <option>2008</option>
                                                <option>2007</option>
                                                <option>2006</option>
                                                <option>2005</option>
                                                <option>2004</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="make" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Make</option>
                                                <option>Lorem</option>
                                                <option>ipsum</option>
                                                <option>dolor</option>
                                                <option>sit</option>
                                                <option>amet</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="model" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Model</option>
                                                <option>Lorem</option>
                                                <option>ipsum</option>
                                                <option>dolor</option>
                                                <option>sit</option>
                                                <option>amet</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="body_style" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Body Style</option>
                                                <option>Cargo</option>
                                                <option>Compact</option>
                                                <option>Convertible</option>
                                                <option>Coupe</option>
                                                <option>Hatchback</option>
                                                <option>Minivan</option>
                                                <option>Sedan</option>
                                                <option>SUV</option>
                                                <option>Truck</option>
                                                <option>Van</option>
                                                <option>Wagon</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="mileage" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Mileage</option>
                                                <option>0</option>
                                                <option>&lt; 10,000</option>
                                                <option>&lt; 20,000</option>
                                                <option>&lt; 30,000</option>
                                                <option>&lt; 40,000</option>
                                                <option>&lt; 50,000</option>
                                                <option>&lt; 60,000</option>
                                                <option>&lt; 70,000</option>
                                                <option>&lt; 80,000</option>
                                                <option>&lt; 90,000</option>
                                                <option>&lt; 100,000</option>
                                                <option>&lt; 120,000</option>
                                                <option>&lt; 150,000</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="transmission" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Transmission</option>
                                                <option>Automatic</option>
                                                <option>Manual</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="fuel_economy" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Fuel Economy</option>
                                                <option>10-20 MPG</option>
                                                <option>20-30 MPG</option>
                                                <option>30-40 MPG</option>
                                                <option>40-50 MPG</option>
                                                <option>50-60 MPG</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="condition" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Condition</option>
                                                <option>New</option>
                                                <option>Used</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="location" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Location</option>
                                                <option>Toronto</option>
                                                <option>New York</option>
                                                <option>Los Angeles</option>
                                                <option>Vancouver</option>
                                            </select>
                                        </div>
                                        <div class="my-dropdown min-years-dropdown max-dropdown">
                                            <select name="price" class="css-dropdowns" tabindex="1" >
                                                <option value="">Search by Price</option>
                                                <option>&lt; $1,000</option>
                                                <option>&lt; $10,000</option>
                                                <option>&lt; $20,000</option>
                                                <option>&lt; $30,000</option>
                                                <option>&lt; $40,000</option>
                                                <option>&lt; $50,000</option>
                                                <option>&lt; $60,000</option>
                                                <option>&lt; $70,000</option>
                                                <option>&lt; $80,000</option>
                                                <option>&lt; $90,000</option>
                                                <option>&lt; $100,000</option>
                                            </select>
                                        </div>
                                        <input type="reset" value="Reset Search Filters" class="pull-left btn-inventory margin-bottom-none md-button" />
                                    </form>
                                    <div class="side-content">
                                        <div class="list col-lg-12 col-md-12 col-sm-3 padding-bottom-50">
                                            <h3>YEAR</h3>
                                            <ul>
                                                <li><span>2014 <strong>(28)</strong></span></li>
                                                <li><span>2013 <strong>(172)</strong></span></li>
                                                <li><span>2012 <strong>(102)</strong></span></li>
                                                <li><span>2011 <strong>(98)</strong></span></li>
                                                <li><span>2010 <strong>(91)</strong></span></li>
                                                <li><span>2009 <strong>(27)</strong></span></li>
                                                <li><span>2008 <strong>(25)</strong></span></li>
                                                <li><span>2007 <strong>(15)</strong></span></li>
                                                <li><span>2006 <strong>(9)</strong></span></li>
                                                <li><span>2005 <strong>(3)</strong></span></li>
                                                <li><a href="#">View More...</a></li>
                                            </ul>
                                        </div>
                                        <div class="list col-lg-12 col-md-12 col-sm-3 padding-bottom-50">
                                            <h3 class="margin-bottom-25">MAKE</h3>
                                            <ul>
                                                <li><span>Acura <strong>(2)</strong></span></li>
                                                <li><span>BMW <strong>(4)</strong></span></li>
                                                <li><span>Buick <strong>(1)</strong></span></li>
                                                <li><span>Cadillac <strong>(6)</strong></span></li>
                                                <li><span>Chevrolet <strong>(19)</strong></span></li>
                                                <li><span>Chrysler <strong>(7)</strong></span></li>
                                                <li><span>Dodge <strong>(14)</strong></span></li>
                                                <li><span>Ford <strong>(15)</strong></span></li>
                                                <li><span>GMC <strong>(9)</strong></span></li>
                                                <li><span>Hummer <strong>(3)</strong></span></li>
                                                <li><a href="#">View More...</a></li>
                                            </ul>
                                        </div>
                                        <div class="financing_calculator col-lg-12 col-md-12 col-sm-6">
                                            <h3 class="margin-bottom-25">FINANCING CALCULATOR</h3>
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
                                                <div class="dropdown_container">
                                                    <select class="frequency css-dropdowns">
                                                        <option value='0'>Bi-Weekly</option>
                                                        <option value='1'>Weekly</option>
                                                        <option value='2'>Monthly</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <a class="btn-inventory pull-right calculate">Calculate My Payment</a>
                                            <div class="clear"></div>
                                            <div class="table-responsive">
                                                <table>
                                                    <tr>
                                                        <td><strong>NUMBER OF PAYMENTS:</strong></td>
                                                        <td><strong>60</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>PAYMENT AMOUNT:</strong></td>
                                                        <td><strong>$ 89.11</strong></td>
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
            </div>
        </div>
        <!--container ends-->
    </section>
    @endsection

@section('js')
    @endsection