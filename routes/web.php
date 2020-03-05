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

			/* start admin routes*/

Route::get('admin', function () {
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
		
			/* end admin routes*/