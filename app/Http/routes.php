<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'as' => 'frontend',
	'uses' => 'HomeController@index'
]);

Route::get('change-password', [
	'as' => 'change-password.get',
	'uses' => 'Auth\PasswordController@changePassword'
]);

Route::post('change-password', [
	'as' => 'change-password.post',
	'uses' => 'Auth\PasswordController@updatePassword'
]);

Route::auth();

Route::get('/home', 'HomeController@index');
Route::put('users/{username}', [
	'as' => 'users.update',
	'uses' => 'UserController@update'
]);

Route::get('users-list', [
	'as' => 'users.index',
	'uses' => 'UserController@index'
]);

Route::get('users/approve', [
	'as' => 'users.approve',
	'uses' => 'UserController@approve'
]);

Route::get('users/{username}', [
	'as' => 'users.show',
	'uses' => 'UserController@show'
]);

Route::resource('stores', 'StoreController');
Route::get('stores-search', [
	'as' => 'stores-search',
	'uses' => 'StoreSearchController@index'
]);

Route::get('search/results', [
	'as' => 'search-results',
	'uses' => 'StoreSearchController@search'
]);

Route::resource('retailer-contacts', 'RetailerContactController');
Route::resource('products', 'ProductController');
Route::get('order', [
	'as' => 'orders.makeOrder',
	'uses' => 'ProductController@makeOrder'
]);

Route::get('orders/{id}/mark-complete', [
	'as' => 'orders.markComplete',
	'uses' => 'OrderController@markComplete'
]);

Route::get('orders/{id}/mark-pending', [
	'as' => 'orders.markPending',
	'uses' => 'OrderController@markPending'
]);

Route::resource('orders', 'OrderController');
Route::resource('order-payments', 'OrderPaymentController');
Route::resource('testomonials', 'TestomonialController');

Route::post('transactions/process', [
	'as' => 'transactions.process',
	'uses' => 'TransactionController@processTransaction'
]);

Route::get('payment/redirect', ['as' => 'paypal.redirect', 'uses' => 'TransactionController@processRedirect']);

Route::resource('faqs', 'FaqController');

Route::get('settings', 'SettingController@index');
Route::post('settings', [
	'as' => 'settings.store',
	'uses' => 'SettingController@store'
]);

/**
 * Frontend Routes
 */
Route::get('our-products', 'Frontends\ProductsController@index');
Route::get('our-products/{slug}', 'Frontends\ProductsController@show');
Route::get('faqs-list', 'Frontends\FaqController@index');
Route::post('mail/contact', [
	'as' => 'mail.contact',
	'uses' => 'Frontends\MailController@mailFromContactSection'
]);

/**
 * Temporary routes
 */
Route::get('about-us', function() {
	return view('pages.about');
});

Route::get('our-creation', function() {
	return view('pages.our-creation');
});

Route::get('career', function() {
	return view('pages.career');
});

Route::get('contact-us', function() {
	return view('pages.contact-us');
});

Route::get('pricing', 'Frontends\ProductsController@pricing');

Route::get('forms', function() {
	return view('pages.forms');
});

Route::get('shipping', function() {
	return view('pages.shipping');
});

Route::get('manage-retail', function() {
	return view('pages.manage-retail');
});

Route::get('quality-assurance', function() {
	return view('pages.quality-assurance');
});