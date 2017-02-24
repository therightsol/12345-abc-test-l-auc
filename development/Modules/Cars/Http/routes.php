<?php

Route::group(['middleware' => 'web', 'prefix' => 'cars', 'namespace' => 'Modules\Cars\Http\Controllers'], function()
{
    Route::get('/', 'CarsController@index');
});
