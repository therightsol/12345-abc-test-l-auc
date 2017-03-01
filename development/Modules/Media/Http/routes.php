<?php

Route::group(['middleware' => 'web', 'prefix' => 'media', 'namespace' => 'Modules\Media\Http\Controllers'], function()
{


    // Media
    Route::get('media/{paginate?}/{page?}', 'MediaController@index')->name('media');
    Route::get('add-media', 'MediaController@add')->name('add-media');
    Route::post('destroy-media', 'MediaController@destroy')->name('destroy-media');
    //Route::get('all-media/{dir?}', 'MediaController@all_media')->name('all-media');
    Route::post('store-media', 'MediaController@store')->name('store-media');
    //Route::get('ajax-media/{offset?}/{quantity?}', 'MediaController@ajax_media')->name('ajax_media');
    Route::delete('media-destroy/{filename}', 'MediaController@destroy')->name('media-delete');
    Route::post('media-destroy', 'MediaController@bulk_delete')->name('media-bulk-delete');


});


