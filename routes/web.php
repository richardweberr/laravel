<?php

Route::get('/pages/cgv', 'PagesController@showCGV');
Route::get('/pages/mentions', 'PagesController@showMentions');
Route::get('/pages/contact', 'PagesController@showContact');
Route::get('/homepage', 'PagesController@showHome');

Route::get('/catalogue', 'CatalogController@showCatalog');
Route::get('/login', 'SuperadminController@showAdmin');

Route::get('/product', 'ProductController@index');
Route::get('/product/create', 'ProductController@create');
Route::post('/product', 'ProductController@store');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/product/{id}/edit', 'ProductController@edit');
Route::put('/product/{id}', 'ProductController@update');
Route::delete('/product/{id}', 'ProductController@destroy');

Route::get('/customer', 'CustomerController@index');
Route::get('/customer/create', 'CustomerController@create');
Route::post('/customer', 'CustomerController@store');
Route::get('/customer/{id}', 'CustomerController@show');
Route::get('/customer/{id}/edit', 'CustomerController@edit');
Route::put('/customer/{id}', 'CustomerController@update');
Route::delete('/customer/{id}', 'CustomerController@destroy');
