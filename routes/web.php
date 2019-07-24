<?php

/*
|############################
|############################
| set routes of USERS bellow.
|############################
|############################
*/

Route::get('/', 'UserController@getAllInfo')->name('top');
Route::get('/shoplist',  'UserController@getShopInfo')->name('shoplist');
Route::get('/about', 'UserController@getAbout')->name('about');
Route::get('/codec', 'UserController@getCodec')->name('codec');
Route::get('/compensation', 'UserController@getCompensation')->name('compensation');
Route::get('/operation', 'UserController@getOperation')->name('operation');
Route::get('/waterproof', 'UserController@getWaterproof')->name('waterproof');

/*
|############################
| set routes of News bellow.
|############################
*/
Route::get('/news', 'UserController@getNewsInfo')->name('news.show');

/*
|############################
| set routes of Product News bellow.
|############################
*/
Route::get('/product-news', 'UserController@showProductNewsList');
Route::get('/product-news/{id}', 'UserController@getEachProductNews')->name('product-news.show');

/*
|############################
| set routes of Artists bellow.
|############################
*/
Route::get('/artists', 'UserController@getArtistsInfo')->name('artists.show');
Route::get('/artists/e-nakamura', 'UserController@getNakamura')->name('nakamura.show');
Route::get('/artists/gesu', 'UserController@getGesu')->name('gesu.show');
Route::get('/artists/maisonbookgirl', 'UserController@getMaison')->name('maison.show');
Route::get('/artists/pnk', 'UserController@getPnk')->name('pnk.show');

/*
|############################
| set routes of Inquries bellow.
|############################
*/
Route::get('/inqury', 'UserController@getInqury')->name('inqury');
Route::get('/inqury/confirm', 'UserController@getInquryConfirm');
Route::get('/inqury/thanks', 'UserController@getInquryThanks');

/*
|############################
| set routes of products bellow.
|############################
*/
Route::get('/product', 'UserController@getProductInfo')->name('product.show');
Route::get('/product/TE-D01h', 'UserController@getTed01h');
Route::get('/product/WE-D01b', 'UserController@getWed01b');
Route::get('/product/WE-D01c', 'UserController@getWed01c');

/*
|############################
| set routes of Support bellow.
|############################
*/

Route::get('/support', 'UserController@getSupport')->name('support');
Route::get('/support/registration', 'UserController@getProductRegistration')->name('product_regiser');
Route::get('/support/registration/confirm', 'UseController@getConfirm');













/*
|############################
|############################
| set routes of ADMIN bellow.
|############################
|############################
*/

Route::group(['prefix' => '/admin'], function(){
    Route::get('/', 'AdminController@index')->name('home');
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@register');

    Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
});

/*
| Shop Settings
*/
Route::group(['prefix' => '/admin/shop'], function(){
    Route::get('/', 'ShopController@getIndex')->name('shop');
    Route::get('create', 'ShopController@create')->name('shop.create');
    Route::patch('confirm', 'ShopController@confirm')->name('shop.confirm');
    Route::post('store', 'ShopController@store')->name('shop.store');
    Route::get('{id}/edit', 'ShopController@edit')->name('shop.edit');
    Route::patch('{id}/edit', 'ShopController@update')->name('shop.update');
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
    Route::post('store', 'ProductController@store')->name('product.store');
    Route::get('{id}/edit', 'ProductController@edit')->name('product.edit');
    Route::patch('{id}/edit', 'ProductController@update')->name('product.update');
});

/*
| Product-News Settings
*/

Route::group(['prefix' => '/admin/product-news','middlwware'=>'web'], function(){
    Route::get('/', 'ProductNewsController@getList')->name('product_news');
    Route::get('create', 'ProductNewsController@create')->name('product_news.create');
    Route::patch('confirm', 'ProductNewsController@confirm')->name('product_news.confirm');
    Route::post('store', 'ProductNewsController@store')->name('product_news.store');
    Route::get('{id}/edit', 'ProductNewsController@edit')->name('product_news.edit');
    Route::patch('{id}/edit', 'ProductNewsController@update')->name('product_news.update');
});

/*
| News Settings
*/

Route::group(['prefix' => '/admin/news','middlwware'=>'web'], function(){
    Route::get('/', 'NewsController@getList')->name('news');
    Route::get('create', 'NewsController@create')->name('news.create');
    Route::patch('confirm', 'NewsController@confirm')->name('news.confirm');
    Route::post('store', 'NewsController@store')->name('news.store');
    Route::get('{id}/edit', 'NewsController@edit')->name('news.edit');
    Route::patch('{id}/edit', 'NewsController@update')->name('news.update');
});


// Auth::routes();
