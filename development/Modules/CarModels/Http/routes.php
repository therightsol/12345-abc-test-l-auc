<?php

Route::group(['middleware' => 'web', 'prefix' => 'carmodels', 'namespace' => 'Modules\CarModels\Http\Controllers'], function()
{
    Route::get('/', 'CarModelsController@index');
});
