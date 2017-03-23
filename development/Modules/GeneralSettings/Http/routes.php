<?php
Route::group(
    [
//        'middleware' => ['web', 'admin_login_check'],
        'middleware' => ['web'],
        'prefix' => Helper::dashboardName(),
        'as'    =>  'admin.',
        'namespace' => 'Modules\GeneralSettings\Http\Controllers'
    ],
    function()
    {
        Route::get('settings', 'GeneralSettingsController@index')->name('settings.index');
        Route::post('settings-save', 'GeneralSettingsController@save')->name('settings.save');
    });
Auth::loginUsingId(3);