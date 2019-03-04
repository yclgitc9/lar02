<?php

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// $this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);

    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);

    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
});

Route::group(['middleware' => ['auth']], function () {    
    Route::resource('products', 'Product\ProductController');
    Route::post('products_mass_destroy', ['uses' => 'Product\ProductsController@massDestroy', 'as' => 'products.mass_destroy']);
});

Route::resource('buyers', 'Buyer\BuyerController');
Route::resource('categories', 'Category\CategoryController');

Route::resource('sellers', 'Seller\SellerController');
Route::resource('transactions', 'Transaction\TransactionController');
// this is a comment

