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
Route::group(['prefix' => '/admin/shop'], function(){
    Route::get('/', 'ShopController@getIndex')->name('shop');
    Route::get('create', 'ShopController@create')->name('shop.create');
    Route::patch('confirm', 'ShopController@confirm')->name('shop.confirm');
    Route::post('finish', 'ShopController@store')->name('shop.store');
});

// Route::group(['middleware' => ['web']], function () {
//     Route::get('/admin/shop/create', 'ShopController@crete');
//   });


/*
| Product Settings
*/

Route::group(['prefix' => '/admin/product','middlwware'=>'web'], function(){
    Route::get('/', 'ProductController@getList')->name('product');
    Route::get('create', 'ProductController@create')->name('product.create');
    Route::patch('confirm', 'ProductController@confirm')->name('product.confirm');
    Route::post('finish', 'ProductController@finish')->name('product.store');
});