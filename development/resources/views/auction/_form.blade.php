<div class="listing-view margin-bottom-20 col-sm-12">
    <div class="row">
        <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 padding-none"> <span class="ribbon"><strong>{{ $auctions->count() }} Auctions Showing:</strong></span> <span class="ribbon-item">All Listings</span> </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 padding-none pull-right select_view"> <span class="align-right">Select View:</span>
            <ul class="page-view nav nav-tabs" id="myTab">
                <li class="active"><a href="#full-width" data-toggle="tab"><i class="fa fa-align-left"></i></a></li>
                <li><a href="#box-full-width" data-toggle="tab"><i class="fa"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<form method="get" action="" id="listingForm" class="listing_sort">
    <div class="select-wrapper listing_select clearfix margin-top-none margin-bottom-15 col-sm-12">
        <div class="my-dropdown years-dropdown">

            {{ Form::select('year', $manufacturing_years, Request::input('year'),
            ['class' => 'css-dropdowns', 'tabindex' => 1, 'placeholder' => 'All Years']) }}

        </div>
        <div class="my-dropdown makers-dropdown">
            {{ Form::select('company', $companies, Request::input('company'),
          ['class' => 'css-dropdowns', 'tabindex' => 1, 'placeholder' => 'All Companies']) }}

        </div>
        <div class="my-dropdown models-dropdown">
            {{ Form::select('model', $models, Request::input('model'),
        ['class' => 'css-dropdowns', 'tabindex' => 1, 'placeholder' => 'All Models']) }}

        </div>
        <div class="my-dropdown body-styles-dropdown">
            {{ Form::select('body_type', $body_types, Request::input('body_type'),
          ['class' => 'css-dropdowns', 'tabindex' => 1, 'placeholder' => 'All Body Styles']) }}
        </div>
        <div class="my-dropdown mileage-dropdown">
            {{ Form::select('kilometer', $kilometers, Request::input('kilometer'),
          ['class' => 'css-dropdowns', 'tabindex' => 1, 'placeholder' => 'All Mileage']) }}
        </div>
        <div class="my-dropdown transmissions-dropdown">
            {{ Form::select('transmission', ['automatic' => 'Automatic', 'manual'=> 'Manual'], Request::input('transmission'),
          ['class' => 'css-dropdowns', 'tabindex' => 1, 'placeholder' => 'All Transmissions']) }}

        </div>

        <div class="my-dropdown location-dropdown">
            {{ Form::select('location', $city_of_registration, Request::input('location'),
          ['class' => 'css-dropdowns', 'tabindex' => 1, 'placeholder' => 'All Locations']) }}
        </div>
        <div class="my-dropdown prices-dropdown">
            {{ Form::select('price', $bid_starting_amounts, Request::input('price'),
          ['class' => 'css-dropdowns', 'tabindex' => 1, 'placeholder' => 'All Prices']) }}
        </div>
        <div class="my-dropdown prices-dropdown">
            {{ Form::select('closed', ['true' => 'Closed'], Request::input('closed'),
          ['class' => 'css-dropdowns', 'tabindex' => 1, 'placeholder' => 'Opened']) }}
        </div>
    </div>
    <div class="select-wrapper pagination clearfix">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sort-by-menu"> <span class="sort-by">Sort By:</span>
                <div class="my-dropdown price-ascending-dropdown">
                    {{ Form::select('order_by', ['asc' => 'Ascending', 'desc'=> 'Descending'], Request::input('order_by'),
          ['class' => 'css-dropdowns', 'tabindex' => 1, 'placeholder' => 'Price Ascending']) }}

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-offset-1">
                {{$auctions->appends(request()->input())->links()}}
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">

            </div>
        </div>
    </div>
</form>
<div class="clearfix"></div>