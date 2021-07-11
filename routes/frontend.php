<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'HomePageController@index')->name('web.index');
    Route::get('product-list/{slug}/{id}', 'HomePageController@productList')->name('web.product.product-list');
    Route::get('/product-detail/{slug}/{id}', 'HomePageController@productDetail')->name('web.product.single-product');
    Route::post('product-price-check', 'HomePageController@productPriceCheck');
    // Login
    Route::group(['namespace' => 'Login'], function () {
        Route::get('/login', 'LoginController@index')->name('web.user.login');
        Route::post('login', 'LoginController@login')->name('web.login');
        Route::get('logout', 'LoginController@logout')->name('web.logout');
    });

    // Register
    Route::group(['namespace' => 'Register'], function () {
        Route::get('/register', 'RegisterController@index')->name('web.user.register');
        Route::post('register', 'RegisterController@register')->name('web.register');
    });
    // Cart
    Route::group(['namespace' => 'Cart'], function () {
        Route::post('add-cart', 'CartController@addCart')->name('web.add_cart');
        Route::get('view-cart', 'CartController@viewCart')->name('web.cart');
        Route::post('update-cart', 'CartController@updateCart')->name('web.update_cart');
        Route::get('remove-cart-item/{id}', 'CartController@removeCartItem')->name('web.remove_cart_item');
    });

     // Search
     Route::group(['namespace' => 'Search'], function(){
        Route::post('/search', 'SearchController@search')->name('web.product.search');
        Route::get('product-search/{keyword}', 'SearchController@productSearch');
    });
    Route::group(['middleware' =>'auth:web'], function () {
        // Checkout Section
        Route::group(['namespace' => 'Checkout'], function () {
            Route::get('checkout', 'CheckoutController@showCheckoutForm')->name('web.checkout');
            Route::post('place-order', 'CheckoutController@placeOrder')->name('web.place_order');
            Route::get('/confirm/{order_id}/{address_id}', 'CheckoutController@confirm')->name('web.checkout.confirm');
            // Route::get('checkout', 'CheckoutController@showCheckoutForm')->name('web.checkout.checkout');
        });

        // Profile Section
        Route::group(['namespace' => 'Profile'], function () {
            Route::get('/profile', 'ProfileController@index')->name('web.profile.index');
            Route::get('/edit-Profile', 'ProfileController@edit')->name('web.profile.edit-profile');
            Route::post('/store-Profile', 'ProfileController@store')->name('web.store.profile');
        });
        // Order history Section
        Route::group(['namespace' => 'Order'], function () {
            Route::get('/order', 'OrderController@index')->name('web.order.index');
            Route::get('/order-list', 'OrderController@list')->name('web.order.order-list');
            Route::get('/order/{id}', 'OrderController@singleOrder')->name('web.view.order');
        });
        // Wishlist
        Route::group(['namespace' => 'Wishlist'], function () {
            Route::get('/wishlist', 'WishlistController@index')->name('web.wishlist.wishlist');
            Route::get('/wishlist/add/{product_id}/{size_id}', 'WishlistController@addWishList')->name('web.add_wish_list');
            Route::get('/wishlist/move/{list_id}', 'WishlistController@wishListMove')->name('web.move_wish_list');
            Route::get('/wishList/delete/{list_id}', 'WishlistController@deleteWishList')->name('web.delete_wish_list');
        });

        Route::group(['namespace' => 'Address'], function () {
            Route::get('/address', 'AddressController@index')->name('web.address.address');
            Route::get('/edit-address/{id}', 'AddressController@edit')->name('web.address.edit-address');
            Route::get('/add/address', 'AddressController@addAddress')->name('web.address.add_address');
            Route::post('/add-address', 'AddressController@add')->name('web.address.add');
            Route::post('/update-address', 'AddressController@update')->name('web.address.update');
        });

        Route::group(['namespace' => 'ChangePassword'], function () {
            Route::get('/change-password', 'ChangePasswordController@index')->name('web.profile.change-password');
            Route::post('/change/password', 'ChangePasswordController@changePassword')->name('web.profile.do.change-password');
        });
    });
});

Route::get('/checkout-edit-Address', function () {
    return view('web.checkout.checkout-edit-address');
})->name('web.checkout.checkout-edit-address');

// Route::get('/register', function () {
//     return view('web.user.register');
// })->name('web.user.register');

Route::get('/forgot-password', function () {
    return view('web.user.forgot-password');
})->name('web.user.forgot-password');

Route::get('/New-password', function () {
    return view('web.user.forgot-change-password');
})->name('web.user.forgot-change-password');
