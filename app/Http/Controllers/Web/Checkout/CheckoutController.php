<?php

namespace App\Http\Controllers\Web\Checkout;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Charges;
use App\Models\Order;
use App\Models\OrderDetalis;
use App\Models\Product;
use App\Models\ProductSize;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function showCheckoutForm(){
        $addresses = Address::whereUser_id(Auth::guard('web')->user()->id)->get();
        $cart = Cart::whereUser_id(Auth::guard('web')->user()->id)->get();
        $total = collect($cart)->sum(function ($row) {
            return $row->product->min_price * $row->quantity;
        });
        $shipping_charge = Charges::first();
        $shipping_charge = $shipping_charge->amount;
        $grand_total = $total + $shipping_charge;
        return view('web.checkout.checkout', compact('addresses', 'cart', 'total', 'shipping_charge', 'grand_total'));
    }
    public function placeOrder(Request $request)
    {
    	$request->validate([
    		'address_id' => 'required'
    	],
    	[	'address_id.required' => 'Select Billing Address'
        ]);
        $address_id = $request->input('address_id');
        $total = $request->input('total');
        $shipping_charge = $request->input('shipping_charge');
        $grand_total = $request->input('grand_total');
        if($request->input('payment_type') == 1){
            try {
                $order_id = null;
                DB::transaction(function () use(&$address_id, $total, $shipping_charge, $grand_total, &$order_id) {
                    $order = new Order();
                    $order->user_id = Auth::guard('web')->user()->id;
                    $order->shipping_address_id = $address_id;
                    $order->amount = $grand_total;
                    $order->shipping_charge = $shipping_charge;
                    $order->payment_type = 1;
                    $order->payment_status = 1;
                    $order->delivery_status = 1;
                    $order->assign_date = Carbon::now();
                    $order->save();
                    $order_id = $order->id;
                    $cart = Cart::whereUser_id(Auth::guard('web')->user()->id)->get();
                    foreach ($cart as $item) {
                        $product_size = ProductSize::where('product_id', $item->product_id)->first();
                        $order_detail = new OrderDetalis();
                        $order_detail->user_id = Auth::guard('web')->user()->id;
                        $order_detail->order_id = $order->id;
                        $order_detail->product_id = $item['product_id'];
                        $order_detail->size = $product_size->size." ".$product_size->sizeType->name;
                        $order_detail->size = $item['size_id'];
                        $order_detail->quantity = $item['quantity'];
                        $order_detail->price = $product_size->price;
                        $order_detail->mrp = $product_size->mrp;
                        $order_detail->save();

                        // Stock
                        for ($i=0; $i < $item->quantity; $i++) { 
                            if ($product_size->stock > 0) {
                                $product_size->stock = ($product_size->stock - 1);
                                $product_size->save();
                            }
                        }
                    }
                // /** Sending Order Email **/
                    // $user_detail = DB::table('users')
                    //     ->where('id', Auth()->user()->id)
                    //     ->first();
                    //        $request_info = "<table width=\"100%\">
                    //             <tr>
                    //                 <td>
                    //                     <address>
                    //                         <strong>Billed to</strong>
                    //                         <br>".$user_detail->name."
                    //                         <br>Phone: ".$user_detail->contact_no."
                    //                         <br>Email: ".$user_detail->email."
                    //                     </address>
                    //                 </td>
                    //                 <td>
                    //                     <address>
                    //                         <strong>Ciel Couture</strong>
                    //                         <br>Guwahati, Assam
                    //                         <br>Phone: 88638746953
                    //                         <br>Email: info@cielcouture.com
                    //                      </address>
                    //                 </td>
                    //             </tr>
                    //         </table><br>
                    //         <table border=\"1\" class=\"table\">
                    //             <tr>
                    //                 <th>Product Name</th>
                    //                 <th>Description</th>
                    //                 <th>Price</th>
                    //                 <th>Quantity</th>
                    //                 <th>Amount</th>
                    //             </tr>";
                    //             $request_info = $request_info."
                    //             <tr>
                    //                 <td colspan=\"4\" align=\"right\" style=\"font-weight: bold;\">Subtotal</td>
                    //                 <td>".Cart::subtotal()."</td>
                    //             </tr>
                    //             <tr>
                    //                 <td colspan=\"4\" align=\"right\" style=\"font-weight: bold;\">Discount</td>
                    //                 <td>".(0.00)."</td>
                    //             </tr>
                    //             <tr>
                    //                 <td colspan=\"4\" align=\"right\" style=\"font-weight: bold;\">Total</td>
                    //                 <td>".(Cart::subtotal())."</td>
                    //             </tr>
                    //         </table>
                    //         <p style=\"text-align: left;\">Date : ".date('d-m-Y')."</p>";
                    //         $subject = "Ciel Couture Order Confirmation";
                    
                    //         $data = [
                    //             'message' => $request_info,
                    //             'subject' => $subject,
                    //     ];

                            // Mail::to(Auth::guard('users')->user()->email)->send(new OrderEmail($data));
                            
                            // $arr = array('msg' => 'Payment successfully credited', 'status' => true);
                            
                            // return Response()->json($arr); 
                            // return $order_id;
                            Cart::whereUser_id(Auth::guard('web')->user()->id)->delete();
                });
                return redirect()->route('web.checkout.confirm', ['order_id' => encrypt($order_id), 'address_id' => encrypt($address_id)]);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Something went Wrong! Try after sometime!');
            }
        }else{
            // Online Payment
            dd("Online Payment Inbtegration");
        }
    // $cart = DB::table('cart')
        //     ->leftjoin('product_stock', 'cart.stock_id', '=', 'product_stock.id')
        //     ->leftjoin('product','product_stock.product_id','=','product.id')
        //     ->select('product.price', 'product.discount', 'cart.quantity', 'product_stock.id as stock_id')
        //     ->where('cart.user_id', Auth()->user()->id)
        //     ->get();

        // foreach ($cart as $key => $item) {

        // 	DB::table('order_detail')
	    // 		->insert([
	    // 			'order_id' => $order_id,
	    // 			'stock_id' => $item->stock_id,
	    // 			'price' => $item->price,
	    // 			'discount' => $item->discount,
	    // 			'quantity' => $item->quantity
	    // 		]);

        // //  Stock
        //         for ($i=0; $i < $item->quantity; $i++) { 
                
        //         $stock = DB::table('product_stock')
        //             ->where('id', $item->stock_id)
        //             ->first();

        //         if ($stock->stock > 0) {
        //             DB::table('product_stock')
        //                 ->where('id', $item->stock_id)
        //                 ->update([
        //                     'stock' => $stock->stock - 1 
        //                 ]);
        //         }
        //     }
        // }

        // DB::table('cart')
	    // 	->where('user_id', Auth()->user()->id)
	    // 	->delete();

        // /** Sending Order Email **/
        // $user_detail = DB::table('users')
        //     ->where('id', Auth()->user()->id)
        //     ->first();

        // $request_info = "<table width=\"100%\">
        //     <tr>
        //         <td>
        //             <address>
        //                 <strong>Billed to</strong>
        //                 <br>".$user_detail->name."
        //                 <br>Phone: ".$user_detail->contact_no."
        //                 <br>Email: ".$user_detail->email."
        //             </address>
        //         </td>
        //         <td>
        //             <address>
        //                 <strong>Ciel Couture</strong>
        //                 <br>Guwahati, Assam
        //                 <br>Phone: 88638746953
        //                 <br>Email: info@cielcouture.com
        //              </address>
        //         </td>
        //     </tr>
        // </table><br>
        // <table border=\"1\" class=\"table\">
        //     <tr>
        //         <th>Product Name</th>
        //         <th>Description</th>
        //         <th>Price</th>
        //         <th>Quantity</th>
        //         <th>Amount</th>
        //     </tr>";

        // $order_detail = DB::table('order_detail')
        //     ->leftJoin('product_stock', 'order_detail.stock_id', '=', 'product_stock.id')
        //     ->leftJoin('product', 'product_stock.product_id', '=', 'product.id')
        //     ->leftJoin('size', 'product_stock.size_id', '=', 'size.id')
        //     ->leftJoin('color', 'product_stock.color_id', '=', 'color.id')
        //     ->where('order_detail.order_id', $order_id)
        //     ->select('product_stock.product_id', 'product_stock.size_id', 'product_stock.color_id', 'product.product_name', 'size.size', 'color.color', 'order_detail.*')
        //     ->get();

        // $total_sub_total = 0;
        // $total_discount = 0;

        // foreach ($order_detail as $key => $item) {

        //     $sub_total = $item->price * $item->quantity;

        //     $request_info = $request_info."<tr>
        //         <td>".$item->product_name."</td>
        //         <td>Size: ".$item->size.", Color: ".$item->color."</td>
        //         <td>".$item->price."</td>
        //         <td>".$item->quantity."</td>
        //         <td>".$sub_total."</td>
        //     </tr>";

        //     if (!empty($item->discount)) {
                
        //         $discount = ($item->price * $item->discount) / 100;
        //         $total_discount_qty = $item->quantity * $discount;
        //     }

        //     $total_discount = $total_discount + $total_discount_qty;

        //     $total_sub_total = $total_sub_total + $sub_total;
        // }
    }

    public function confirm($id, $address_id) {
        try {
            $id = decrypt($id);
            $address_id = decrypt($address_id);
        } catch (\Exception $e) {
            abort(404);
        }
        $order = Order::find($id);
        $address = Address::find($address_id);
        $product = collect($order->orderDetails)->map(function ($row) {
            return Product::find($row->product_id);
        });
        return view('web.checkout.confirm', compact('order', 'address', 'product'));
    }
}
