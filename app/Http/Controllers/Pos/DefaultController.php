<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Unit;
use App\Models\Supplier;
use App\Models\Purchase;
use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DefaultController extends Controller
{
    public function GetCategory(Request $request){
        $supplier_id = $request->supplier_id;
        $all_category = Product::with(['category'])->select('category_id')->where('supplier_id',$supplier_id)->groupBy('category_id')->get();
        return response()->json($all_category);
    }

    public function GetProduct(Request $request){

        $category_id = $request->category_id;
        $allProduct = Product::where('category_id',$category_id)->get();
        return response()->json($allProduct);
    } // End Mehtod 
}
