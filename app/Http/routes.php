<?php
Route::get('/', 'HomeController@index');

Route::get('about', 'AboutController@index');

Route::get('contact', 'ContactController@index');

Route::post('mail', 'MailController@contact');

Route::group(['prefix' => 'product'], function()
{
    Route::get('/', 'ProductController@index');

    Route::get('show/{type_code}', 'ProductController@show');

    Route::get('showLedDetail/{type_code}', 'ProductController@showLedDetail');

    Route::get('showHighpower/{type_code}', 'ProductController@showHighpower');

    Route::get('showLedProduct/{type_code}', 'ProductController@showLedProduct');

    Route::get('showDcUseFilm/{type_code}', 'ProductController@showDcUseFilm');

    Route::post('uploadPdf/{group_id}/{groupItem_id}', 'ProductController@uploadPDF');
});

Route::get('hm-secret-login', 'Login\LoginController@index');

Route::post('login', 'Login\LoginController@dologin');

Route::get('logout', 'Login\LoginController@dologout');