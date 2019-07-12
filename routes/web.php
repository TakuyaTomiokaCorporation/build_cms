<?php

/*
|############################
| set routes of USERS bellow.
|############################
*/

Route::get('/', function () {
    return view('user.home');
});

Route::get('/shoplist',  'ShopController@getShopInfo');

Route::get('/news', 'NewsController@index');

/*
|############################
| set routes of ADMIN bellow.
|############################
*/
Route::get('/admin', function(){
    return view('admin.top');
});

/*
| Shop Settings
*/
Route::group(['prefix' => '/admin/shop'], function () {
    Route::get('list', 'ShopController@getIndex')->name('shop.list');
    Route::get('create', 'ShopController@create')->name('shop.create');
    Route::patch('confirm', 'ShopController@confirm')->name('shop.confirm');
    Route::post('finish', 'ShopController@finish')->name('shop.finish');
});