<?php
Route::group(
    [
//        'middleware' => ['web', 'admin_login_check'],
        'middleware' => ['web'],
        'prefix' => Helper::dashboardName(),
        'as'    =>  'admin.',
        'namespace' => 'Modules\Auctions\Http\Controllers'
    ],
    function()
    {
        Route::Resource('auctions', 'AuctionsController', ['names' => Helper::ResourceNames('auctions')]);
    });