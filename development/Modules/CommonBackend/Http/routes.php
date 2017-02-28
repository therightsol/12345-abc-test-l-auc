<?php

$dashboardName = \Modules\CommonBackend\Providers\CommonBackendServiceProvider::getdashboardName();


Route::group(['middleware' => ['web'], 'prefix' => $dashboardName, 'namespace' => 'Modules\CommonBackend\Http\Controllers'],
    function () use ($dashboardName)
{
    Route::get('/', 'CommonBackendController@index');
    Route::get('/not-authorized', 'CommonBackendController@not_authorized')->name('not-authorized');
    Route::get('/login', 'CommonBackendController@login')->name('dashboard-login');
    Route::get('/reset-password', 'CommonBackendController@login')->name('reset-password');
    Route::post('/do-login', 'CommonBackendController@do_login')->name('do-login');
});
