<?php

namespace App\Http\Controllers\Web\Wishlist;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\WishList;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $user_id = Auth::guard('web')->user()->id;
        $wish_data = [];

        $wish_list = WishList::where('user_id', $user_id)->get();
        if (count($wish_list) > 0) {
            foreach ($wish_list as $key => $item) {
                $product = Product::where('id', $item->product_id)->where('status', 1)->first();
                $size = ProductSize::find($item->size_id);

                $wish_data[] = [
                    'wish_id' => $item->id,
                    'product_id' => $product->id,
                    'title' => $product->name,
                    'image' => $product->main_image,
                    'quantity' => $item->quantity,
                    'size' => $size->sizeType->name,
                    'price' => $size->price,
                    'mrp' => $size->mrp,
                ];
            }
        } else {
            $wish_data = false;
        }
        return view('web.wishlist.wishlist', compact('wish_data'));
    }
    public function addWishList($product_id, $size_id)
    {
        try {
            $product_id = decrypt($product_id);
        } catch (DecryptException $e) {
            return redirect()->back();
        }
        $user_id = Auth::guard('web')->user()->id;
        $check_wish_list = WishList::where('user_id', $user_id)->where('product_id', $product_id)->count();

        if ($check_wish_list < 1) {
            $wishlist = new Wishlist();
            $wishlist->user_id = $user_id;
            $wishlist->product_id = $product_id;
            $wishlist->size_id = $size_id;
            $wishlist->save();
        }
        return redirect()->back();
    }

    public function wishListMove($wish_list_id)
    {
        try {
            $wish_list_id = decrypt($wish_list_id);
        } catch (DecryptException $e) {
            return redirect()->back();
        }
        $user_id = Auth::guard('web')->user()->id;
        $wish_list = WishList::where('id', $wish_list_id)->first();
        $check_cart_product = Cart::where('product_id', $wish_list->product_id)->where('user_id', $user_id)->count();

        if ($check_cart_product < 1) {
            $cart = new Cart();
            $cart->product_id = $wish_list->product_id;
            $cart->user_id = $user_id;
            $cart->quantity = $wish_list->quantity;
            $cart->size_id = $wish_list->size_id;
            $cart->save();
        }

        $wish_list = Wishlist::where('id', $wish_list_id)->delete();
        return redirect()->route('web.cart');
    }

    public function deleteWishList($wish_list_id)
    {
        try {
            $wish_list_id = decrypt($wish_list_id);
        } catch (DecryptException $e) {
            return redirect()->back();
        }

        WishList::where('id', $wish_list_id)->delete();
        return redirect()->back();
    }
}
