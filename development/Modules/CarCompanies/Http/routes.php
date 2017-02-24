<?php

Route::group(['middleware' => 'web', 'prefix' => 'carcompanies', 'namespace' => 'Modules\CarCompanies\Http\Controllers'], function()
{
    Route::get('/', 'CarCompaniesController@index');
});
