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

use App\Category;
use App\User;

Route::get('/', 'CategoriesController@customer_index_category');

Route::get('/logout', function () {
	$user = User::find(auth()->user()->id);
    $user ->login_status = 0;
    $user->save();
	Auth::logout();
    return redirect("/");
});

/*---------------- start admin routes ----------------*/

	Route::get('admin','HomeController@statistics');

	Route::get('admin/accounts', 'UsersController@admin_accounts_index');

	Route::get('admin/categories', 'CategoriesController@admin_categories_index');

	Route::get('admin/comments', 'CommentsController@admin_comments_index');

	Route::get('admin/products', 'ProductsController@admin_products_index');

	Route::get('admin/products/edit/{id}', 'ProductsController@admin_products_edit');	

	Route::put('admin/products/confirm/{id}', 'ProductsController@admin_products_confirm_edit');

	Route::get('admin/products/destroy/{id}', 'ProductsController@admin_product_destroy');	

	Route::get('admin/categories/edit/{id}', 'CategoriesController@admin_categories_edit');	

	Route::put('admin/categories/confirm/{id}', 'CategoriesController@admin_categories_confirm_edit');

	Route::get('admin/categories/destroy/{id}', 'CategoriesController@admin_categories_destroy');

	Route::get('admin/comments/destroy/{id}', 'commentsController@admin_comments_destroy');

/*---------------- end admin routes ----------------*/

		
/*----------------start customer routes----------------*/			

	/*Route::get('customer/cart', function () {
	    return view('customer_view/cart/cart');
	});

	Route::get('customer/orders', function () {
	    return view('customer_view/orders/orders');
	});

	Route::get('customer/products', function () {
	    return view('customer_view/products/products');
	});

	Route::get('customer/profile', function () {
	    return view('customer_view/profile/profile');
	});
	Route::get('customer/categories', function () {
	    return view('customer_view/categories/categories');
	});*/

		
/*---------------- end customer routes ----------------*/

/*---------------- start seller routes ----------------*/

	Route::get('seller', 'ProductsController@seller_index_products');
	/*
	Route::get('seller/orders', function () {
	    return view('seller_view/orders/orders');
	});

	Route::get('seller/profile', function () {
	    return view('seller_view/profile/profile');
	});*/
		
/*---------------- end seller routes ----------------*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
