<?php

Route::group(['middleware' => 'web', 'prefix' => 'generalsettings', 'namespace' => 'Modules\GeneralSettings\Http\Controllers'], function()
{
    Route::get('/', 'GeneralSettingsController@index');
});
