<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Size;
use App\Models\Size_Product;
use App\Models\Product;
use App\Models\Media;

use Illuminate\Http\Request;
class AppController extends Controller
{
    public function web_index()
    {
        $products = Product::all();
        
        return view('web.index',compact('products'));
    }
}
