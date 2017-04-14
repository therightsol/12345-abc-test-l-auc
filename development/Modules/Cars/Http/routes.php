<?php
Route::group(
    [
//        'middleware' => ['web', 'admin_login_check'],
        'middleware' => ['web','has_role:admin,staff'],
        'prefix' => Helper::dashboardName(),
        'as'    =>  'admin.',
        'namespace' => 'Modules\Cars\Http\Controllers'
    ],
    function()
    {

        Route::Resource('cars', 'CarsController', ['names' => Helper::ResourceNames('cars')]);
        Route::Resource('category', 'CategoryController', ['names' => Helper::ResourceNames('category')]);

        Route::post('get-models', 'CarsController@getModels')->name('getModels');
    });

