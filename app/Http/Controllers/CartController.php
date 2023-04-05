<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Cart_Product;
use App\Models\Invoice;
use App\Models\Invoice_Product;
use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\Temp_Cart;
use App\Models\User;

class CartController extends Controller
{
   
    public function addProduct(Request $request,$id)
    {

        
        $user = User::find(\auth()->id());
        $cart = Cart::where('user_id',$user->id)->first();
    
        if($cart == null)
        {
            $cart = Cart::create([
                'user_id' => $user->id,
            ]);
            $cart->save();
        }
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

        return  back();  
        
    }
    public function minusProduct(Request $request,$id)
    {
        
        $exist_cart_product = Cart_Product::where('product_id',$id)->get();
        $cart_product = Cart_Product::where('product_id',$id)->update(['amount'=>$exist_cart_product[0]->amount-1]);
        if($exist_cart_product[0]->amount==1)
        {
            Cart_Product::where('product_id',$id)->delete();
        }
        return back();
        
    }

    public function deleteItem(Request $request,$id)
    {
        
        Cart_Product::where('id',$id)->delete();
        return redirect()->action([CartController::class, 'showCart']);
        
    }
    public function deleteAll(Request $request)
    {
        $cart = Cart::where('user_id',auth()->id())->first(); 
        $cart_products = Cart_Product::where('cart_id',$cart->id)->get();
       
        foreach($cart_products as $item){
            $item->delete();

        }
        return redirect()->action([CartController::class, 'showCart']);
        
    }
    public function showCart()
    {
        $cart = Cart::where('user_id',auth()->id())->first(); 
        $cart_products = null;
        if($cart!=null){
            $cart_products = Cart_Product::where('cart_id',$cart->id)->get();
           
            return view('web.cart',compact('cart_products'));
            
        }else{
            return view('web.cart',compact('cart_products'));
        }

       
    }
    public function showOrder()
    {
        
        $cart = Cart::where('user_id',auth()->id())->first(); 

        $cart_products = Cart_Product::where('cart_id',$cart->id)->get();
        return view('web.order',compact('cart_products'));
    }
    public function order(Request $request)
    {
        $cart = Cart::where('user_id',auth()->id())->first();
        $cart_products = Cart_Product::where('cart_id',$cart->id)->get();

        $invoice = Invoice::create([
            'delivery_address' => $request->input('address'),
            'sdt' => $request->input('phoneNumber'),
            'amount' => $cart_products->count(),
            'total' => $request->input('total'),
            'status' => 0
        
        ]);
        $invoice->save();
            foreach ($cart_products as $item) {
                $invoice_product = Invoice_Product::create([
                    'invoice_id' => $invoice->id,
                    'product_id' => $item->product_id,
                    'amount' => $item->amount
                ]);
                $invoice_product->save();
                

            } 

            $cart->delete();
            foreach($cart_products as $item){
                $item->delete();

            }
           

            return redirect()->action([WebController::class, 'web_index']);
                
               
             
       

        
    }

   
    
}
