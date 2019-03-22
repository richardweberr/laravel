<?php

//*********Pages controller********************************************************************************************
Route::get('/', 'PagesController@showHome')
    ->name('home');
Route::get('/pages/cgv', 'PagesController@showCGV'
)->name('cgv');
Route::get('/pages/mentions', 'PagesController@showMentions')
    ->name('mentions');
Route::get('/pages/contact', 'PagesController@showContact')
    ->name('contact');


//*********Product Controller******************************************************************************************
Route::get('/catalog', 'ProductController@index')
    ->name('catalog');
Route::get('/product/{id}', 'ProductController@show')
    ->name('product');


//*********Basket Controller*******************************************************************************************
Route::get('panier', 'BasketController@showPanier')
    ->name('basket');
Route::put('panier', 'BasketController@addPanier')
    ->name('basketAdd');


//*********Customer Controller*****************************************************************************************
//Route::get('/customer', 'CustomerController@index')
//    ->name('customerList');
//Route::get('/customer/create', 'CustomerController@create');
//Route::post('/customer', 'CustomerController@store');
//Route::get('/customer/{id}', 'CustomerController@show');
//Route::get('/customer/{id}/edit', 'CustomerController@edit');
//Route::put('/customer/{id}', 'CustomerController@update');
//Route::delete('/customer/{id}', 'CustomerController@destroy');


//*********************************************************************************************************************
//*********BACKOFFICE**************************************************************************************************

Route::get('admin/login', 'SuperadminController@index')
    ->name('admin');

//*********Admin Order Controller********************************************************************************************
Route::get('admin/orderList', 'OrderController@index')
    ->name('list');

//*********Admin Product Controller************************************************************************************
Route::get('/admin/catalog', 'AdminProductController@index')
    ->name('admin_catalog');
Route::get('/admin/product/create', 'AdminProductController@create')
    ->name('admin_productCreate');
Route::post('/admin/product/created', 'AdminProductController@store')
    ->name('admin_productCreated');
Route::get('/admin/product/{id}', 'AdminProductController@show')
    ->name('admin_productShow');
Route::get('/admin/product/{id}/edit', 'AdminProductController@edit')
    ->name('admin_productEdit');
Route::post('/admin/product/{id}/edited', 'AdminProductController@update')
    ->name('admin_productEdited');
Route::get('/admin/product/{id}/delete', 'AdminProductController@destroy')
    ->name('admin_productDestroy');

//*********Admin Customer Controller************************************************************************************
Route::get('/admin/list', 'AdminCustomerController@index')
    ->name('admin_customerList');
//Route::get('/admin/customer/create', 'AdminCustomerController@index')
//    ->name('admin_customerCreate');
//Route::post('/admin/customer/created', 'AdminCustomerController@index')
//    ->name('admin_customerCreated');
//Route::get('/admin/customer/{id}', 'AdminCustomerController@index')
//    ->name('admin_customerShow');
//Route::get('/admin/customer/{id}/edit', 'AdminCustomerController@index')
//    ->name('admin_customerEdit');
//Route::post('/admin/customer/{id}/edited', 'AdminCustomerController@index')
//    ->name('admin_customerEdited');
//Route::get('/admin/customer/{id}/delete', 'AdminCustomerController@index')
//    ->name('admin_customerDestroy');