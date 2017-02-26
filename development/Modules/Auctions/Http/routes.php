<?php

Route::group(['middleware' => 'web', 'prefix' => 'auctions', 'namespace' => 'Modules\Auctions\Http\Controllers'], function()
{
    Route::get('/', 'AuctionsController@index');
});
