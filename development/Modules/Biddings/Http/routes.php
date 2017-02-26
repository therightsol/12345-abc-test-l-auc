<?php

Route::group(['middleware' => 'web', 'prefix' => 'biddings', 'namespace' => 'Modules\Biddings\Http\Controllers'], function()
{
    Route::get('/', 'BiddingsController@index');
});
