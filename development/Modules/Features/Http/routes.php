<?php

Route::group(['middleware' => 'web', 'prefix' => 'features', 'namespace' => 'Modules\Features\Http\Controllers'], function()
{
    Route::get('/', 'FeaturesController@index');
});
