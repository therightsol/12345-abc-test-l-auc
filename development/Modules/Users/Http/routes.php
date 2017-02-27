<?php

Route::group(['middleware' => 'web', 'prefix' => 'backend/users', 'namespace' => 'Modules\Users\Http\Controllers'], function()
{
    Route::get('/', 'UsersController@index');
});
