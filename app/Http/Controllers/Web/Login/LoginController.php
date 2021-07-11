<?php

namespace App\Http\Controllers\Web\Login;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('web.user.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required'
        ]);

        if ((Auth::guard('web')->attempt(['mobile' => $request->username, 'password' => $request->password])) || (Auth::guard('web')->attempt(['email' => $request->username, 'password' => $request->password]))) {
            //************Check Session Shopping Cart**********************
            if (Session::has('cart') && !empty(Session::get('cart'))) {
                $cart = Session::get('cart');
                if (count($cart) > 0) {
                    foreach ($cart as $product_id => $value) {

                        $size_id = null;
                        if (isset($value['size_id']) && !empty($value['size_id'])) {
                            $size_id = $value['size_id'];
                        }
                        $check_cart_product = Cart::where('product_id', $product_id)->where('user_id', Auth::guard('web')->user()->id)->count();
                        if ($check_cart_product < 1) {
                            $cart = new Cart();
                            $cart->product_id = $product_id;
                            $cart->user_id = Auth::guard('web')->user()->id;
                            $cart->size_id = $size_id;
                            $cart->quantity = $value['quantity'];
                            $cart->save();
                        }
                    }
                }
                Session::forget('cart');
                Session::save();
            }
            return redirect()->intended('/');
        }
        return back()->withInput($request->only('username'))->with('login_error', 'Username or password incorrect');
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('web.user.login');
    }
}
