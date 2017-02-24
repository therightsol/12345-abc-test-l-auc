<?php

Route::group(['middleware' => 'web', 'prefix' => 'enginetypes', 'namespace' => 'Modules\EngineTypes\Http\Controllers'], function()
{
    Route::get('/', 'EngineTypesController@index');
});
