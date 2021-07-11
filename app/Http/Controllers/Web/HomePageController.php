<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\SubCategory;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function index()
    {
        $products = Product::whereStatus(1)->whereCategory_id(1)->get();
        $latest_product = Product::orderBy('created_at', 'desc')->whereStatus(1)->whereCategory_id(1)->get();
        $popular_products = Product::orderBy('created_at', 'DESC')->whereStatus(1)->whereCategory_id(1)->whereIs_popular(1)->get();
        return view('web.index', compact('products', 'latest_product', 'popular_products'));
    }

    public function productList($slug, $id)
    {
        $products = Product::whereStatus(1)->whereSub_category_id($id)->paginate(1);
        $sub_category = SubCategory::find($id);
        $categories = Category::whereStatus(1)->whereCategory_type(1)->get();
        return view('web.product.product-list', compact('products', 'sub_category', 'categories'));
    }

    public function productDetail($slug, $id)
    {
        $product = Product::find($id);
        // $size = ProductSize::where('product_id', $product->id)->get();
        $latest_product = Product::orderBy('created_at', 'desc')->where('category_id', '!=', 2)->where('id', '!=', $id)->get();
        return view('web.product.single-product', compact('product', 'latest_product'));
    }

    public function productPriceCheck(Request $request)
    {
        if (!empty($request->input('stock_id'))) {
            $stock = ProductSize::find($request->input('stock_id'));
            $html = '<p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price"> ₹' . number_format($stock->price, 2) . '</span> </p>
           <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ₹' . number_format($stock->mrp, 2) . ' </span> </p>';

            return $html;
        } else {
            return 1;
        }
    }
}
