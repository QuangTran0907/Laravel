<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Cart_Product;
use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\Temp_Cart;
use App\Models\User;

class CartController extends Controller
{
   
    public function addProduct(Request $request,$id)
    {

        // $cart = Cart::create([
        //     'user_id' => 1,
        // ]);
        // $cart->save();

        $cart = Cart::find(1);
        $exist_cart_product = Cart_Product::where('product_id',$id)->get();
        //dd(count($exist_cart_product));
        if(count($exist_cart_product)==0){
            $cart_product = Cart_Product::create([
                'cart_id' => $cart->id,
                'product_id' => $id,
                'amount' =>1,
                'status' => false
            ]);
            $cart_product->save();
        }else{
            $cart_product = Cart_Product::where('product_id',$id)->update(['amount'=>$exist_cart_product[0]->amount+1]);
        }     
        
    }
    public function minusProduct(Request $request,$id)
    {
        
        $exist_cart_product = Cart_Product::where('product_id',$id)->get();
        $cart_product = Cart_Product::where('product_id',$id)->update(['amount'=>$exist_cart_product[0]->amount-1]);
        if($exist_cart_product[0]->amount==1)
        {
            Cart_Product::where('product_id',$id)->delete();
        }
        
    }

    public function deleteProduct(Request $request,$id)
    {
        
        Cart_Product::where('product_id',$id)->delete();
        
    }
   
    
}
