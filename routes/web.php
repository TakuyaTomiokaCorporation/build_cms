<?php

/*
|############################
| set routes of USERS bellow.
|############################
*/

Route::get('/', function () {
    return view('user.home');
});

Route::get('/shoplist',  'ShopController@index');

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
Route::get('/admin/shop_registraion', 'ShopController@showCreateShop');

Route::post('/admin/shop_registraton', 'ShopController@createShop');