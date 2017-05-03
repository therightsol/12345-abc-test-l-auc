<?php

$dashboardName = \Modules\CommonBackend\Providers\CommonBackendServiceProvider::getdashboardName();

$prefixedResourceNames = function ($prefix) {
    return [
        'index'   => $prefix . '.index',
        'create'  => $prefix . '.create',
        'store'   => $prefix . '.store',
        'show'    => $prefix . '.show',
        'edit'    => $prefix . '.edit',
        'update'  => $prefix . '.update',
        'destroy' => $prefix . '.destroy'
    ];
};

Route::group(
    [
        'middleware' => ['web','has_role:admin,staff'],
        'prefix' => 'backend',
        'as'    =>  'admin.',
        'namespace' => 'Modules\Users\Http\Controllers'
    ],
    function(  ) use ($dashboardName, $prefixedResourceNames)
    {

        Route::Resource('users', 'UsersController', ['names' => $prefixedResourceNames('users')]);

//        Route::get('/', 'UsersController@index');
        //Route::get('/login', 'UsersController@login')->name($dashboardName . '-login');
    });

Route::group(
    [
        'middleware' => ['web','has_role:auctioneer'],
        'prefix' => 'backend',
        'as'    =>  'account.',
        'namespace' => 'Modules\Users\Http\Controllers'
    ],
    function(  ) use ($dashboardName, $prefixedResourceNames)
    {

        Route::get('Auctioneer-profile', 'AuctioneerController@edit')->name('auctioneerProfile');
        Route::put('Auctioneer-profile', 'AuctioneerController@update')->name('auctioneerProfileUpdate');

    });

Route::group(
    [
        'middleware' => ['web','has_role:bidder'],
        'prefix' => 'backend',
        'as'    =>  'account.',
        'namespace' => 'Modules\Users\Http\Controllers'
    ],
    function(  ) use ($dashboardName, $prefixedResourceNames)
    {

        Route::get('bidder-profile', 'BidderController@edit')->name('bidderProfile');
        Route::put('bidder-profile', 'BidderController@update')->name('bidderProfileUpdate');

    });



