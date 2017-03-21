<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::group(['middleware' => ['web']], function () {
    Route::match(['get','post'],'auction', 'Auction\AuctionController@index')->name('auction.index');
    Route::get('view-auction/{id}', 'Auction\AuctionController@show')->name('auction.show');
});
