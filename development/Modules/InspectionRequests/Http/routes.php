<?php

Route::group(
    [
        'middleware' => ['web','has_role:admin,staff'],
        'prefix' => Helper::dashboardName(),
        'as'    =>  'admin.',
        'namespace' => 'Modules\InspectionRequests\Http\Controllers'
    ],
    function()
    {
        Route::Resource('inspection', 'InspectionRequestsController', ['names' => Helper::ResourceNames('inspection')]);
    });