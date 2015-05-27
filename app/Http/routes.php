<?php
Route::get('/', 'HomeController@index');

Route::get('about', 'AboutController@index');

Route::get('product', 'ProductController@index');

Route::get('product/show/{type_code}', 'ProductController@show');

Route::get('contract', 'ContractController@index');

Route::post('mail', 'MailController@contract');