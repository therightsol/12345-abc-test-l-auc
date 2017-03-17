<div class="search-form margin-top-20 padding-vertical-20">
    <form method="post" action="{{ route('auction.index') }}">
        {{ csrf_field() }}
        <div class="select-wrapper clearfix">
            <div class="col-md-6">
                <div class="min-price select-dropdown">
                    <div class="my-dropdown min-price-dropdown min-dropdown">
                        <select name="min_year" class="css-dropdowns" tabindex="1" >
                            <option value="">Min Year</option>
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
                    <span class="my-dropdown">to</span>
                    <div class="my-dropdown max-price-dropdown min-dropdown">
                        <select name="max_year" class="css-dropdowns" tabindex="1" >
                            <option value="">Max Year</option>
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
                </div>
            </div>
            <div class="col-md-6">
                <div class="min-price select-dropdown">
                    <div class="my-dropdown min-price-dropdown min-dropdown">
                        <select name="min_price" class="css-dropdowns" tabindex="1" >
                            <option value="">Min Price</option>
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
                    <span class="my-dropdown">to</span>
                    <div class="my-dropdown max-price-dropdown min-dropdown">
                        <select name="max_price" class="css-dropdowns" tabindex="1" >
                            <option value="">Max Price</option>
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
                </div>
            </div>
        </div>
        <div class="select-wrapper clearfix">
            <div class="col-md-6">
                <div class="my-dropdown make-dropdown">
                    <select name="body_style" class="css-dropdowns" tabindex="1" >
                        <option value="">Body Style</option>
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
            </div>
            <div class="col-md-6">
                <div class="min-price select-dropdown">
                    <div class="my-dropdown min-price-dropdown min-dropdown">
                        <select name="min_mileage" class="css-dropdowns" tabindex="1" >
                            <option value="">Min Mileage</option>
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
                    <span class="my-dropdown">to</span>
                    <div class="my-dropdown max-price-dropdown min-dropdown">
                        <select name="max_mileage" class="css-dropdowns" tabindex="1" >
                            <option value="">Max Mileage</option>
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
                </div>
            </div>
        </div>
        <div class="select-wrapper clearfix">
            <div class="col-md-6">
                <div class="my-dropdown make-dropdown">
                    <select name="model" class="css-dropdowns" tabindex="1" >
                        <option value="">Model</option>
                        <option>Lorem</option>
                        <option>ipsum</option>
                        <option>dolor</option>
                        <option>sit</option>
                        <option>amet</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="my-dropdown make-dropdown">
                    <select name="transmission" class="css-dropdowns" tabindex="1" >
                        <option value="">Transmission</option>
                        <option>Automatic</option>
                        <option>Manual</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="select-wrapper clearfix">
            <div class="col-md-6">
                <div class="my-dropdown make-dropdown">
                    <select name="company" class="css-dropdowns" tabindex="1" >
                        <option value="">Company</option>
                        <option>Lorem</option>
                        <option>ipsum</option>
                        <option>dolor</option>
                        <option>sit</option>
                        <option>amet</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="my-dropdown">
                    <input class="full-width" type="search" value="" placeholder="Refine with keywords">
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="select-wrapper clearfix">
            <div class="form-element clearfix">
                <input type="checkbox" id="check">
                <label for="check">Certified</label>
            </div>
            <div class="form-element">
                <input type="checkbox" id="check2">
                <label for="check2">CARFAX&reg; Verified</label>
            </div>
            <div class="form-element">
                <input type="checkbox" id="check3">
                <label for="check3">Brand New</label>
            </div>
            <div class="form-element">
                <input type="submit" value="Find My New Vehicle" class="find_new_vehicle pull-right md-button">
            </div>
        </div>
    </form>
</div>