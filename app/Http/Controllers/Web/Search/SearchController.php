<?php

namespace App\Http\Controllers\Web\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request){
        $keywords = $request->input('search');
        $keyword = ucfirst($keywords);
        $keyword = explode(" ", $keyword);

        $product_list = "";
        $products = DB::table('products')
            ->Where(function ($query) use ($keyword) {

                for ($i = 0; $i < count($keyword); $i++) {
                    $query->orWhere('products.name', 'like',  '%' . $keyword[$i] . '%');
                }
            });
        $products = $products
            ->where('products.status', 1)
            ->select('products.*')
            ->distinct('products.name')
            ->get();
            foreach ($products as $key => $value) {

                if (empty($value->price)) {
    
                    $p_stock = DB::table('product_sizes')
                        ->where('product_id', $value->id)
                        ->orderBy('price', 'ASC')
                        ->first();
    
                    $value->price = $p_stock->price;
                    $value->mrp = $p_stock->mrp;
                }
            }
        return view('web.search', compact('products', 'keywords'));
    }

    public function productSearch($keyword)
    {
        $keyword = ucfirst($keyword);
        $keyword = explode(" ", $keyword);

        $product_list = "";
        $products = DB::table('products')
            ->Where(function ($query) use ($keyword) {

                for ($i = 0; $i < count($keyword); $i++) {
                    $query->orWhere('products.name', 'like',  '%' . $keyword[$i] . '%');
                }
            });

        $products = $products
            ->where('products.status', 1)
            ->select('products.*')
            ->distinct('products.name')
            ->get();

        foreach ($products as $key => $value) {

            if (empty($value->price)) {

                $p_stock = DB::table('product_sizes')
                    ->where('product_id', $value->id)
                    ->orderBy('price', 'ASC')
                    ->first();

                $value->price = $p_stock->price;
                $value->mrp = $p_stock->mrp;
            }
        }

        if (!empty($products)) {

            foreach ($products as $key => $item) {

                $url = asset('images/products/' . $item->main_image);

                $product_list = $product_list . "<div class=\"row\"><span class=\"triup glyphicon glyphicon-triangle-top\"></span></div> <div class=\"row livesrc\"><div class=\"col-md-3\"><img src=\"" . $url . "\" width=\"100\"></div><div class=\"col-md-9\"><p style=\"font-weight: bold;\"><a href=\"" . route('web.product.single-product', ['slug' => $item->slug, 'id' => $item->id]) . "\">" . $item->name . "</a></p><p>₹" . $item->price . "</p></div></div>";
            }
        }

        if (!empty($product_list))
            print $product_list;
        else {
            $product_list = "";

            print $product_list;
        }
    }

}
