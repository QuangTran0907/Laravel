<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Size;
use App\Models\Size_Product;
use App\Models\Product;
use App\Models\Media;

use Illuminate\Http\Request;
class WebController extends Controller
{
    public function web_index()
    {
        $products = Product::all();
        
        return view('web.index',compact('products'));
    }
    public function detail($id)
    {
        $product = Product::find($id);
        $size_product = Size_Product::where('product_id',$id)->get();

       //dd($product->media);
        return view('web.detail',compact('product','size_product'));
    }
}
