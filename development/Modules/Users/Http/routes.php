<?php

$dashboardName = \Modules\CommonBackend\Providers\CommonBackendServiceProvider::getdashboardName();

Route::group(['middleware' => ['web', 'admin_login_check'], 'prefix' => $dashboardName .'/users', 'namespace' => 'Modules\Users\Http\Controllers'],
    function(  ) use ($dashboardName) {
        Route::get('/', 'UsersController@index');
        //Route::get('/login', 'UsersController@login')->name($dashboardName . '-login');
    });


// For Base Controllers

