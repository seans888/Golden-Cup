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


Route::get('/', 'FrontController@index')->name('home');
Route::get('/copiers', 'FrontController@copiers')->name('copiers');
Route::get('/copier', 'FrontController@copier ')->name('copier');

//*********** pages ***********//
Route::get('about', 'PagesController@getAbout');
Route::get('payment_method', 'PagesController@getPayment');
/*Route::get('/', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');
Route::get('copiers', 'PagesController@getCopiers');
Route::get('kyocera', 'PagesController@getKyocera');
Route::get('ricoh', 'PagesController@getRicoh');
Route::get('parts', 'PagesController@getParts');

Route::get('account_settings', 'PagesController@getAccountSettings');*/

/////////////////////////
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function () {
    Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');

    Route::get('orders/{type?}', 'OrderController@Orders');

});
Route::resource('address','AddressController');

//Route::get('checkout','CheckoutController@step1');
Route::group(['middleware' => 'auth'], function () {
    Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
});


Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');


Route::get('test',function(){
   $orders=App\Order::find(2);
   $items=$orders->orderItems;
dd($items);
});

Route::prefix('admin')->group(function(){
Route::get('/admin/login', 'Auth\AdminController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
});