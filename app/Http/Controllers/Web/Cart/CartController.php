<?php

namespace App\Http\Controllers\Web\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Charges;
use App\Models\Product;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        if (Auth::guard('web')->user() && !empty(Auth::guard('web')->user()->id)) {
            $product_id = $request->input('product_id');
            $stock_id = $request->input('product_size_id');
            $qty = $request->input('qty');
            $product = Product::findOrFail($product_id);
            $size = ProductSize::find($stock_id);
            $size_type = $size->sizeType->name;
            /** Checking Product Size **/
            if (!empty($size)) {
                if ($size->stock < $qty) {
                    return redirect()->back()->with('msg', 'Required quantity not available');
                }
            }

            $size_id = $request->input('size_id');
            $count = 0;
            if (!empty($size_id)) {
                $count = Cart::whereUser_id(Auth::guard('web')->user()->id)->whereProduct_id($product_id)->whereSize_id($stock_id)->count();
            } else {
                $count = Cart::whereUser_id(Auth::guard('web')->user()->id)->whereProduct_id($product_id)->count();
            }
            if ($count == 0) {
                $cart = new Cart();
                $cart->user_id = Auth::guard('web')->user()->id;
                $cart->product_id = $product_id;
                $cart->size_id = $stock_id;
                $cart->quantity = $qty;
                $cart->save();
            } else {
                $cart = Cart::whereUser_id(Auth::guard('web')->user()->id)->whereProduct_id($product_id)->first();
                $cart->quantity = ($cart->quantity + $qty);
                $cart->save();
            }
        } else {
            // Guest
            $product_id = $request->input('product_id');
            $stock_id = $request->input('product_size_id');
            $qty = $request->input('qty');

            $product = Product::findOrFail($product_id);
            $size = ProductSize::find($stock_id);
            $size_type = $size->sizeType->name;

            // Get from session
            if (Session::has('cart') && !empty(Session::get('cart'))) {
                $cart = Session::get('cart');
                $cart[$product_id] = [
                    'quantity' => $qty,
                    'size_id' => $stock_id,
                ];
            } else {
                $cart = [
                    $product_id => [
                        'quantity' => $qty,
                        'size_id' => $stock_id,
                    ],
                ];
            }
            Session::put('cart', $cart);
            Session::save();
        }
        return redirect()->route('web.cart');
    }

    public function viewCart()
    {
        $shipping_charge = Charges::first();
        $shipping_charge = $shipping_charge->amount;
        $total = 0;
        $grand_total = 0;
        if (Auth::guard('web')->user() && !empty(Auth::guard('web')->user()->id)) {
            $cart_data = [];
            $user_id = Auth::guard('web')->user()->id;

            $cart = Cart::where('user_id', $user_id)->get();
            $total = collect($cart)->sum(function ($row) {
                return $row->product->min_price * $row->quantity;
            });

            $grand_total = $total + $shipping_charge;
            if (count($cart) > 0) {
                foreach ($cart as $item) {
                    $product = Product::where('id', $item->product_id)->where('status', 1)->first();
                    $size = ProductSize::find($item->size_id);
                    $cart_data[] = [
                        'product_id' => $product->id,
                        'name' => $product->name,
                        'image' => $product->main_image,
                        'quantity' => $item->quantity,
                        'size_id' => $item->size_id,
                        'size' => $size->size,
                        'size_type' => $size->sizeType->name,
                        'price' => $size->price,
                        'mrp' => $product->mrp,
                        'stock' => $size->stock
                    ];
                }
            } else {
                $cart_data = false;
            }
        } else {
            if (Session::has('cart') && !empty(Session::get('cart'))) {
                $cart = Session::get('cart');
                $cart_data = [];
                if (count($cart) > 0) {
                    foreach ($cart as $product_id => $value) {
                        $product = Product::where('id', $product_id)->where('status', 1)->first();
                        $size = ProductSize::find($value['size_id']);
                        $total = $total + ($size->price * $value['quantity']);
                        $cart_data[] = [
                            'product_id' => $product->id,
                            'name' => $product->name,
                            'image' => $product->main_image,
                            'quantity' => $value['quantity'],
                            'size_id' => $value['size_id'],
                            'size' => $size->size,
                            'size_type' => $size->sizeType->name,
                            'price' => $size->price,
                            'mrp' => $size->mrp,
                            'stock' => $size->stock,
                        ];
                    }
                    $grand_total = $total + $shipping_charge;
                } else {
                    $cart_data = false;
                }
            } else {
                $cart_data = false;
            }
        }
        return view('web.cart.cart', compact('cart_data', 'total', 'shipping_charge', 'grand_total'));
    }
    public function removeCartItem($id)
    {
        if (Auth::guard('web')->user() && !empty(Auth::guard('web')->user()->id)) {
            $user_id = Auth::guard('web')->user()->id;
            $delete_cart = Cart::where('user_id', $user_id)->where('product_id', $id)->delete();
            return redirect()->route('web.cart')->with('message', 'Product Removed From Cart');
        } elseif (Session::has('cart') && !empty(Session::get('cart'))) {
            Session::forget('cart.' . $id);
            return redirect()->route('web.cart')->with('message', 'Product Removed From Cart');
        }
    }
    public function updateCart(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required',
            'qty' => ['required', 'numeric'],
        ]);

        $product_id = $request->input('product_id');
        $quantity = $request->input('qty');
        $stock = $request->input('stock');
        if (Auth::guard('web')->user() && !empty(Auth::guard('web')->user()->id)) {
            $product = Product::findOrFail($product_id);
            if ($stock >= $request->input('qty')) {
                $updateCart = Cart::where('user_id', Auth::guard('web')->user()->id)->where('product_id', $product_id)
                ->update([
                    'quantity' => $quantity
                ]);
            } else {
                return redirect()->back()->with('msg', 'Required quantity not available');
            }
           
            return redirect()->route('web.cart')->with('message', 'Cart Updated Successfully');
        } elseif (Session::has('cart') && !empty(Session::get('cart'))) {

            $product_id = $request->input('product_id');
            $quantity = $request->input('qty');
            $cart = Session::get('cart');
            $stock = ProductSize::find($cart[$product_id]['size_id']);
            if ($stock->stock >= $request->input('qty')) {
                $item = $cart[$product_id]['quantity'] = $quantity;
                Session::put('cart', $cart);
                Session::save();
            } else {
                return redirect()->back()->with('msg', 'Required quantity not available');
            }

            return redirect()->route('web.cart')->with('message', 'Cart Updated Successfully');
        }

        return redirect()->route('web.cart');
    }
}
