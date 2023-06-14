<?php

use Illuminate\Support\Facades\Route;
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
/*define router authenticate*/
// Auth::routes([
//     'verify' => true,
// ]);



//=>> Admin Router

/*Home Admin*/
Route::get('/admin/index','Admin\HomeController@index')->name('admin.home');

// Route Category

Route::group(['prefix'=>'admin/category'],function(){
    //show category
    Route::get('/show',[
        'as' => 'admin.category.show',
        'uses' => 'Admin\CategoryController@index'
    ]);
    //create category
    Route::get('/create',[
        'as' => 'admin.category.create',
        'uses' => 'Admin\CategoryController@create'
    ]);
    //store category
    Route::post('/store', [
        'as'=>'admin.category.store',
        'uses'=>'Admin\CategoryController@store'
    ]);
    // edit category
    Route::get('/edit/{id}',[
        'as'=>'admin.category.edit',
        'uses'=>'Admin\CategoryController@edit'
    ]);
       // delete category
    Route::get('/delete/{id}',[
        'as'=>'admin.category.delete',
        'uses'=>'Admin\CategoryController@delete'
    ]);
});

// Router Login_form && Register_form
Route::get('admin/login','LoginRegisterController@showLogin')->name('user.login');
Route::get('admin/register','LoginRegisterController@showRegister')->name('user.register');
Route::post('admin/register','LoginRegisterController@checkRegister')->name('user.register');
Route::post('admin/login','LoginRegisterController@checkLogin')->name('user.login');
// End Router Login_form && Register_form

// Router Product admin

Route::group(['prefix'=>'admin/product'],function(){
    //show product
    Route::get('/index',[
        'as' => 'admin.product.show',
        'uses' => 'Admin\ProductController@index'
    ]);
    Route::get('/create',[
        'as' => 'admin.product.create',
        'uses' => 'Admin\ProductController@create'
    ]);
    Route::post('/store',[
        'as' => 'admin.product.store',
        'uses' => 'Admin\ProductController@store'
    ]);
    Route::get('/edit/{id}',[
        'as' => 'admin.product.edit',
        'uses' => 'Admin\ProductController@edit'
    ]);

    Route::get('/delete/{id}',[
        'as' => 'admin.product.delete',
        'uses' => 'Admin\ProductController@delete'
    ]);
    Route::post('/update/{id}',[
        'as' => 'admin.product.update',
        'uses' => 'Admin\ProductController@update'
    ]);
});
// Router Slide

Route::group(['prefix'=>'admin/slide'],function(){
    //show slide
    Route::get('/index',[
        'as' => 'admin.slide.show',
        'uses' => 'Admin\SlideController@index'
    ]);
    Route::post('/upload/store',[
        'as' => 'admin.slide.store',
        'uses' => 'Admin\SlideController@fileStore'
    ]);
    Route::post('/delete',[
        'as' => 'admin.slide.delete',
        'uses' => 'Admin\SlideController@fileDestroy'
    ]);
    
});

// Router coupon

Route::group(['prefix'=>'admin/coupon'],function(){
    //show coupon
    Route::get('/index',[
        'as' => 'admin.coupon.show',
        'uses' => 'Admin\CouponController@index'
    ]);
    //create coupon
    Route::get('/create',[
        'as' => 'admin.coupon.create',
        'uses' => 'Admin\CouponController@create'
    ]);
     //store coupon
     Route::post('/store',[
        'as' => 'admin.coupon.store',
        'uses' => 'Admin\CouponController@store'
    ]);
    //edit coupon
     Route::get('/edit/{id}',[
        'as' => 'admin.coupon.edit',
        'uses' => 'Admin\CouponController@edit'
    ]);
    //update coupon
    Route::post('/update/{id}',[
        'as' => 'admin.coupon.update',
        'uses' => 'Admin\CouponController@update'
    ]);
   //update coupon
   Route::get('/delete/{id}',[
    'as' => 'admin.coupon.delete',
    'uses' => 'Admin\CouponController@delete'
]);
    
});

// there is belong to customer

// Customer
Route::get('/home','User_m\UserController@index')->name('user.home');
Route::get('/index','User_m\UserController@index2')->name('user.home2');
Route::get('/index/fillter_product','User_m\UserController@show_param')->name('user.show_param');
Route::get('/index/search_ajax','User_m\UserController@search_ajax')->name('user.search_ajax');

//Left-bar
Route::post('/index/search_product','User_m\UserController@search_leftbar')->name('user.search_leftbar');
Route::post('/index/search','User_m\UserController@search_sidebar')->name('user.search_sidebar');
Route::get('/index/sidebar/{param}','User_m\UserController@part_sidebar')->name('user.part_sidebar');
// product singer
Route::get('/home/{id}','User_m\UserController@product_singer')->name('user.product_singer');
// cart product
Route::get('/cart', 'User_m\CartController@viewCart')->name('cart.viewcart_product');
Route::get('cart/add-to-cart/{id}', 'User_m\CartController@addCart')->name('cart.addtocart');
Route::get('cart/update-to-cart', 'User_m\CartController@updateCart')->name('cart.updatetocart');
Route::get('cart/delete-to-cart/{id}', 'User_m\CartController@deleteCart')->name('cart.deletetocart');
// cart coupon
Route::post('cart/coupon', 'Admin\CouponController@check')->name('cart.checkcoupon');
//check out
Route::get('cart/checkout', 'User_m\CheckoutController@index')->name('index.checkout');
Route::get('cart/province', 'User_m\CheckoutController@check_province')->name('province');
Route::get('cart/district', 'User_m\CheckoutController@check_wards')->name('district');
Route::post('cart/payment', 'User_m\CheckoutController@payment_order')->name('paymentorder');


// login 
Route::get('/login','User_m\LgCustomer@showLogin')->name('customer.login');
Route::get('/register','User_m\LgCustomer@showRegister')->name('customer.register');
Route::post('/register','User_m\LgCustomer@checkRegister')->name('customer.register');
Route::post('/login','User_m\LgCustomer@checkLogin')->name('customer.login');
// my account
Route::get('/my-account','User_m\AccountCustomer@index')->name('my_account');
Route::get('/edit-account','User_m\AccountCustomer@edit')->name('edit_my_account');
Route::post('/update-account','User_m\AccountCustomer@update')->name('update_my_account');
Route::get('/detail-orders/{id}','User_m\AccountCustomer@detailorder')->name('detail_order');
Route::get('/err/{id}','User_m\AccountCustomer@errorder')->name('err_order');

//management order
Route::group(['prefix'=>'admin/order'],function(){
Route::get('/manager-order','Admin\ManagerOrder@index')->name('admin.morder');
Route::get('/detail-order/{idorder}','Admin\ManagerOrder@detail')->name('admin.detail');
Route::get('/convest-pdf/{id}','Admin\ManagerOrder@pdf')->name('convest-file');
Route::get('/confim-order/{id}','Admin\ManagerOrder@confirmOrder')->name('confirmorder');
Route::get('/remove-confim-order/{id}','Admin\ManagerOrder@removeconfirmOrder')->name('remove.confirmorder');
});
//read-at notification
Route::get('/read-at/{id}','Admin\ManagerOrder@readNotification')->name('read.at');