<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use App\Models\SubCategory;

class CategoryController extends Controller
{
   public function AppLoad()
   {
       $slider = Slider::where('status',1)->get();
       $category = Category::with('subCategory')->where('status',1)->get();
       $response = [
            'status' => true,
            'message' => 'Category List',
            'data'=>[
                'slider' => $slider,
                'category' => $category,
            ],
        ];    	
        return response()->json($response, 200);
   }

   public function subCategoryList($category_id)
   {
        $category = SubCategory::where('status',1)->where('category_id',$category_id)->get();
        $response = [
            'status' => true,
            'message' => 'Category List',
            'data'=>$category
        ];    	
        return response()->json($response, 200);
   }
}
