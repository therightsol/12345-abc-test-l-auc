<?php

Route::group(['middleware' => 'web', 'prefix' => 'inspectionrequests', 'namespace' => 'Modules\InspectionRequests\Http\Controllers'], function()
{
    Route::get('/', 'InspectionRequestsController@index');
});
