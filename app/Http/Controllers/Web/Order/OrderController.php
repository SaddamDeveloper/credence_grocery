<?php

namespace App\Http\Controllers\Web\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetalis;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::where('user_id', Auth::guard('web')->user()->id)->get();
        // $order_details = OrderDetalis::where('user_id', Auth::guard('web')->user()->id)->paginate(10);
        // $products = Product::where
        return view('web.order.order', compact('orders'));
    }

    public function list() {
        $orders = Order::where('user_id', Auth::guard('web')->user()->id)->get();
        return view('web.order.order-list', compact('orders'));
    }

    public function singleorder($id){
        try {
            $id = decrypt($id);
        } catch (\Exception $e) {
            abort(404);
        }

        $order_details = OrderDetalis::where('order_id', $id)->get();
        return view('web.order.order', compact('order_details'));
    }
}
