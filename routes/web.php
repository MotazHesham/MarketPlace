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

Route::get('/', 'CategoriesController@customer_categories');

Route::get('/logout', function () {
	Auth::logout();
    return redirect("/");
});

/*---------------- start admin routes ----------------*/

	Route::get('admin','HomeController@statistics');

	Route::get('admin/accounts', 'UsersController@admin_accounts_index');

	Route::get('admin/categories', 'CategoriesController@admin_categories_index');

	Route::get('admin/comments', 'CommentsController@admin_comments_index');

	Route::get('admin/products', 'ProductsController@admin_products_index');

	Route::get('admin/products/approve/{id}', 'ProductsController@admin_products_approve');	

	Route::get('admin/products/destroy/{id}', 'ProductsController@admin_product_destroy');	

	Route::get('admin/categories/edit/{id}', 'CategoriesController@admin_categories_edit');	

	Route::put('admin/categories/confirm/{id}', 'CategoriesController@admin_categories_confirm_edit');

	Route::get('admin/categories/destroy/{id}', 'CategoriesController@admin_categories_destroy');

	Route::get('admin/comments/destroy/{id}', 'commentsController@admin_comments_destroy');

	Route::get('admin/product/details/{id}', 'ProductsController@admin_product_details');

	Route::get('admin/profile/edit/{id}','UsersController@admin_edit_profile');

	Route::put('admin/profile/confirm/{id}', 'UsersController@admin_profile_confirm_edit');

	Route::get('/deleteuser/{id}','UsersController@delete_user');
	

/*---------------- end admin routes ----------------*/

		
/*----------------start customer routes----------------*/			
	

	Route::get('customer', 'CategoriesController@customer_categories');


	Route::get('customer/products/of/category/{id}','ProductsController@product_of_category');

	Route::get('customer/cart/delete/{product_id}', 'CartsController@customer_cart_delete');

	Route::get('customer/cart/{id}', 'CartsController@customer_cart');

	Route::get('customer/orders', 'OrderController@customer_order');

	Route::post('order/cart','OrderController@order_form');

	Route::get('customer/product/details/{id}','ProductsController@customer_product_details');

	Route::get('customer/profile/{id}','UsersController@customer_profile')->name('profile');
	
	Route::get('customer/profile/edit/{id}','UsersController@customer_edit_profile');

	Route::put('customer/profile/confirm/{id}', 'UsersController@customer_profile_confirm_edit');

	Route::get('update/quantity/{quantity}/{product_id}/{cart_id}','CartsController@update_quantity');

	Route::post('comments/insert-comment','CommentsController@insert_comment');

	Route::get('comments/fetch/{id}','CommentsController@fetch_comments');

    Route::post ('add/product','CartsController@add_product')->name('add.product');

		
/*---------------- end customer routes ----------------*/

/*---------------- start seller routes ----------------*/

	
		
/*---------------- end seller routes ----------------*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');