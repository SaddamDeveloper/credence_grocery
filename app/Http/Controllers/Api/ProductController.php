<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\App\Models\Product;
use App\Http\Resources\ProductResource;


class ProductController extends Controller
{
    public function productList($category_id,$type,$page)
    {
        if ($type == '1') {
            $product = Product::where('category_id',$category_id)->where('status',1);
        }else{
            $product = Product::where('sub_category_id',$category_id)->where('status',1);
        }

        $limit = ($page*12)-12;
        $total_rows = $product->count();
        $total_page = ceil($total_rows/12);

        $products = ProductResource::collection($product->skip($limit)->take(12)->get());

        $response = [
            'status' => true,
            'current_page' =>$page,
            'total_page' =>$total_page,
            'message' => "Product List",
            'data' => $products,
        ];
    	return response()->json($response, 200);
    }

    public function singleProductView($product_id)
    {
        $product = new ProductResource(Product::where('id',$product_id)->first());
        $response = [
            'status' => true,
            'message' => "Product Details",
            'data' => $product,
        ];
    	return response()->json($response, 200);
    }


}
