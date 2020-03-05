<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout');
});

/*---------------- start admin routes ----------------*/

	Route::get('admin/homepage', function () {
	    return view('admin_view/statistics/statistics');
	});

	Route::get('admin/accounts', function () {
	    return view('admin_view/accounts/accounts');
	});

	Route::get('admin/categories', function () {
	    return view('admin_view/categories/categories');
	});

	Route::get('admin/comments', function () {
	    return view('admin_view/comments/comments');
	});

	Route::get('admin/products', function () {
	    return view('admin_view/products/products');
	});
		
/*---------------- end admin routes ----------------*/

		
/*----------------start customer routes----------------*/			

	Route::get('cart', function () {
	    return view('cart/cart');
	});

	Route::get('orders', function () {
	    return view('orders/orders');
	});

	Route::get('products', function () {
	    return view('products/products');
	});

	Route::get('profile', function () {
	    return view('profile/profile');
	});
	Route::get('categories', function () {
	    return view('categories/categories');
	});

		
/*---------------- end customer routes ----------------*/

/*---------------- start seller routes ----------------*/

	Route::get('seller/homepage', function () {
	    return view('seller_view/products/products');
	});

	Route::get('seller/orders', function () {
	    return view('seller_view/orders/orders');
	});

	Route::get('seller/profile', function () {
	    return view('seller_view/profile/profile');
	});
		
/*---------------- end seller routes ----------------*/

Route::get('/logout', function () {
	Auth::logout();
    return redirect("home");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
