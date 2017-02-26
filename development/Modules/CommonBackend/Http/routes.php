<?php

Route::group(['middleware' => 'web', 'prefix' => 'backend', 'namespace' => 'Modules\CommonBackend\Http\Controllers'], function()
{
    Route::get('/', 'CommonBackendController@index');
});
