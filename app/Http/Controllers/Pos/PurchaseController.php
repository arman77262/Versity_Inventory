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

class PurchaseController extends Controller
{
    public function PurchaseAll(){
        $allData = Purchase::orderBy('date', 'desc')->orderBy('id','desc')->get();
        return view('backend.purchase.purchase_all', compact('allData'));
    }

    public function PurchaseAdd(){
        $supplier = Supplier::all();
        $unit = Unit::all();
        $category = Category::all();
        return view('backend.purchase.purchase_add', compact('supplier', 'unit', 'category'));
    }
}
