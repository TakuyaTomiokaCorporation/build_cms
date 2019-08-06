<?php

/*
|############################
|############################
| set routes of USERS bellow.
|############################
|############################
*/

Route::get('/', 'UserController@getAllInfo')->name('top');
Route::get('/about', 'UserController@getAbout')->name('about');
Route::get('/codec', 'UserController@getCodec')->name('codec');
Route::get('/compensation', 'UserController@getCompensation')->name('compensation');
Route::get('/operation', 'UserController@getOperation')->name('operation');
Route::get('/waterproof', 'UserController@getWaterproof')->name('waterproof');
Route::get('/qualcomm', 'UserController@getQualcomm')->name('qualcomm');
Route::get('/manual', 'UserController@getManual')->name('manual');
Route::get('/movies', 'UserController@getMovies')->name('movies');
Route::get('/lp1', 'UserController@getLp');

/*
|############################
| set routes of Shops bellow.
|############################
*/

Route::get('/shoplist',  'UserShopController')->name('shoplist');

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
Route::get('/product-news', 'UserController@showProductNewsList')->name('product_news.list');
Route::get('/product-news/{id}', 'UserController@getEachProductNews')->name('product_news.show');

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
Route::get('/inqury/thanks', 'UserController@getInquryThanks')->name('inqury.thanks');

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

Route::get('/support', 'UserRegisterController@getSupport')->name('support');
Route::get('/support/registration', 'UserRegisterController@getProductRegistration')->name('product_regiser');
Route::post('/support/registration/confirm', 'UserRegisterController@getConfirm')->name('product_regiser.confirm');
Route::get('/support/registration/thanks', 'UserRegisterController@getProductThanks')->name('product_register.thanks');













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
    Route::get('/', 'ShopController@getList')->name('shop');
    Route::get('create', 'ShopController@create')->name('shop.create');
    Route::patch('confirm', 'ShopController@confirm')->name('shop.confirm');
    Route::post('store', 'ShopController@store')->name('shop.store');
    Route::get('{id}/edit', 'ShopController@edit')->name('shop.edit');
    Route::patch('{id}/edit', 'ShopController@update')->name('shop.update');
    Route::get('/trash', 'ShopController@trash')->name('shop.trash');
    Route::get('{id}/restore', 'ShopController@restore')->name('shop.restore');
    Route::delete('{id}/delete', 'ShopController@delete')->name('shop.delete');
    Route::delete('{id}/destroy', 'ShopController@destroy')->name('shop.destroy');
});


/*
| Product Settings
*/

Route::group(['prefix' => '/admin/product'], function(){
    Route::get('/', 'ProductController@getList')->name('product');
    Route::get('create', 'ProductController@create')->name('product.create');
    Route::patch('confirm', 'ProductController@confirm')->name('product.confirm');
    Route::post('store', 'ProductController@store')->name('product.store');
    Route::get('{id}/edit', 'ProductController@edit')->name('product.edit');
    Route::patch('{id}/edit', 'ProductController@update')->name('product.update');
    Route::get('/trash', 'ProductController@trash')->name('product.trash');
    Route::get('{id}/restore', 'ProductController@restore')->name('product.restore');
    Route::delete('{id}/delete', 'ProductController@delete')->name('product.delete');
    Route::delete('{id}/destroy', 'ProductController@destroy')->name('product.destroy');
});

/*
| Product-News Settings
*/

Route::group(['prefix' => '/admin/product-news'], function(){
    Route::get('/', 'ProductNewsController@getList')->name('product_news');
    Route::get('create', 'ProductNewsController@create')->name('product_news.create');
    Route::patch('confirm', 'ProductNewsController@confirm')->name('product_news.confirm');
    Route::post('store', 'ProductNewsController@store')->name('product_news.store');
    Route::get('{id}/edit', 'ProductNewsController@edit')->name('product_news.edit');
    Route::patch('{id}/edit', 'ProductNewsController@update')->name('product_news.update');
    Route::get('/trash', 'ProductNewsController@trash')->name('product_news.trash');
    Route::get('{id}/restore', 'ProductNewsController@restore')->name('product_news.restore');
    Route::delete('{id}/delete', 'ProductNewsController@delete')->name('product_news.delete');
    Route::delete('{id}/destroy', 'ProductNewsController@destroy')->name('product_news.destroy');
});

/*
| News Settings
*/

Route::group(['prefix' => '/admin/news'], function(){
    Route::get('/', 'NewsController@getList')->name('news');
    Route::get('create', 'NewsController@create')->name('news.create');
    Route::patch('confirm', 'NewsController@confirm')->name('news.confirm');
    Route::post('store', 'NewsController@store')->name('news.store');
    Route::get('{id}/edit', 'NewsController@edit')->name('news.edit');
    Route::patch('{id}/update', 'NewsController@update')->name('news.update');
    Route::get('/trash', 'NewsController@trash')->name('news.trash');
    Route::get('{id}/restore', 'NewsController@restore')->name('news.restore');
    Route::delete('{id}/delete', 'NewsController@delete')->name('news.delete');
    Route::delete('{id}/destroy', 'NewsController@destroy')->name('news.destroy');
});