<?php
Route::get('/', 'HomeController@index');

Route::get('about', 'AboutController@index');

Route::get('product', 'ProductController@index');

Route::get('product/show/{type_code}', 'ProductController@show');

Route::get('contact', 'ContactController@index');

Route::post('mail', 'MailController@contact');

Route::get('product/showLedDetail/{type_code}', 'ProductController@showLedDetail');