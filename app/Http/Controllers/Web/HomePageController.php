<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $products = Product::whereStatus(1)->whereCategory_id(1)->get();
        $latest_product = Product::orderBy('created_at', 'desc')->whereStatus(1)->whereCategory_id(1)->get();
        return view('web.index', compact('products', 'latest_product'));
    }

    public function productList($slug, $id){
        $products = Product::whereStatus(1)->whereSub_category_id($id)->get();
        $sub_category = SubCategory::find($id);
        $categories = Category::whereStatus(1)->whereCategory_type(1)->get();
        return view('web.product.product-list', compact('products', 'sub_category', 'categories'));
    }

    public function productDetail($slug, $id) {
        $product = Product::find($id);
        $latest_product = Product::orderBy('created_at', 'desc')->where('category_id', '!=', 2)->where('id', '!=', $id)->get();
        return view('web.product.single-product', compact('product', 'latest_product'));
    }
}
