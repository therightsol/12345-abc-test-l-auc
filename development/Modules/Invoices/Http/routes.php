<?php
Route::group(
    [
        'middleware' => ['web','has_role:bidder'],
        'prefix' => 'account',
        'as'    =>  'bidder.',
        'namespace' => 'Modules\Invoices\Http\Controllers'
    ],
    function(  )
    {
        Route::resource('payment', 'BidderInvoiceController', ['names' => Helper::ResourceNames('payment')]);
    });