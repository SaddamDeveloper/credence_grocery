<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\WishList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {        
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Categories
          View::composer('web.include.header', function ($view) {
            $categories = Category::whereStatus(1)->whereCategory_type(1)->get();
            $cart_count = null;
            if (Auth::guard('web')->check()) {
                $wishlist_count = WishList::where('user_id', Auth::guard('web')->user()->id)->count();
                $cart_count = Cart::where('user_id', Auth::guard('web')->user()->id)->count();
            } else {
                if(Session::has('cart') && !empty(Session::get('cart'))){
                    $cart_count = count (Session::get('cart'));
                }else {
                    $cart_count = 0;
                }
                $wishlist_count = 0;
            }
            $view->with('categories', $categories)->with('cart_count', $cart_count)->with('wishlist_count', $wishlist_count);
        });
        
    }
}
