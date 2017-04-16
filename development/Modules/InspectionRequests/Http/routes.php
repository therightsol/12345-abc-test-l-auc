<?php

Route::group(
    [
        'middleware' => ['web','has_role:admin,staff'],
        'prefix' => Helper::dashboardName(),
        'as'    =>  'admin.',
        'namespace' => 'Modules\InspectionRequests\Http\Controllers'
    ],
    function()
    {
        Route::Resource('inspection', 'InspectionRequestsController', ['names' => Helper::ResourceNames('inspection')]);
    });


Route::group(
    [
        'middleware' => ['web','has_role:auctioneer'],
        'prefix' => 'account',
        'as'    =>  'auctioneer.',
        'namespace' => 'Modules\InspectionRequests\Http\Controllers'
    ],
    function(  )
    {

        Route::get('/', function(){
            return view('commonbackend::index');
        })->name('account');

        Route::resource('inspection', 'AuctioneerInspectionRequestsController',['names' => Helper::ResourceNames('inspection')]);
        Route::post('storeCar', 'AuctioneerInspectionRequestsController@storeCar')->name('storeCar');
    });