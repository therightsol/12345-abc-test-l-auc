<?php
Route::group(
    [
//        'middleware' => ['web', 'admin_login_check'],
        'middleware' => ['web','has_role:admin,staff'],
        'prefix' => Helper::dashboardName(),
        'as'    =>  'admin.',
        'namespace' => 'Modules\Auctions\Http\Controllers'
    ],
    function()
    {
        Route::Resource('auctions', 'AuctionsController', ['names' => Helper::ResourceNames('auctions')]);
        Route::post('getAuctionForm', 'AuctionsController@getAuctionForm')->name('getAuctionForm');
        Route::get('searchCar', 'AuctionsController@searchCar')->name('searchCar');
    });

Route::group(
    [
        'middleware' => ['web','has_role:bidder'],
        'prefix' => 'account',
        'as'    =>  'bidder.',
        'namespace' => 'Modules\Auctions\Http\Controllers'
    ],
    function(  )
    {

        Route::get('won-auctions', 'BidderAuctionController@index')->name('wonAuctions');

    });